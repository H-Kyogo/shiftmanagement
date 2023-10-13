<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Invitation;
use App\Models\User;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    
    //インデックス
    public function index() {
        // ページネーションを使用する場合:
        $rooms = Room::paginate(15); // 1ページに10件のルームを表示
        return view('rooms.index', ['rooms' => $rooms]);
    }
    
    //ルーム作成
    public function create(){
        return view('rooms.create');
    }
    
    public function store(Request $request){
         $data = $request->validate([
            'name' => 'required|string|max:255|unique:rooms,name',
        ]);
        
        $data['admin_id'] = auth('admin')->id();  // admin_id をデータに追加
        
        //dd($data);
        $data['invite_code'] = Str::random(10); // これをルーム作成前に追加
        
        Room::create($data);
        
        return redirect()->route('admin.rooms.index')->with('success', 'Room created successfully.');
    }
    
    
   // ルームの招待ページを表示
    public function showInviteForm($roomId) {
        $room = Room::findOrFail($roomId);
       $users = User::where(function ($query) {
        $query->where('type', '!=', 'admin')->orWhereNull('type');
    })->get();
        
        // 以下のように、既に招待されているユーザーのIDのリストを取得します。
        $alreadyInvited = $room->users()->pluck('users.id')->toArray();
        //dd($users, $alreadyInvited);
        return view('rooms.invite', compact('room', 'users','alreadyInvited'));
    }
    
    public function processInvite(Request $request, Room $room) {
        
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);
        
        // 既存の招待をチェック
        if (!$room->users()->where('user_id', $data['user_id'])->exists()) {
            $room->users()->attach($data['user_id'], ['is_invited' => true]);
            return redirect()->route('admin.rooms.index')->with('success', 'User invited successfully!');
        }
        
        return back()->with('error', 'User is already invited to this room.');
    }
    
    public function joinByInvite(Request $request){
        
        $request->validate([
            'invite_code' => 'required|string|exists:rooms,invite_code'
        ]);
        
        //dd($request);
        
        $room = Room::where('invite_code', $request->invite_code)->first();
    
        if (!$room) {
            return back()->with('error', '招待コードが無効です。');
        }
        
        // ユーザーがすでにルームに参加しているかどうかを確認
        if ($room->users()->where('user_id', auth()->id())->exists()) {
            return back()->with('error', 'あなたはすでにこのルームに参加しています。');
        }
        
        $room->users()->attach(auth()->id());
    
        return redirect()->route('dashboard')->with('success', 'ルームに参加しました！');
    }
    
    public function showForAdmin(Room $room) {
        // admin向けのビュー表示ロジック
        return view('rooms.admin_show', ['room' => $room]);
    }
    
    public function showForUser(Room $room) {
        // 一般ユーザー向けのビュー表示ロジック
        return view('rooms.user_show', ['room' => $room]);
    }
}