<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Room;
use App\Models\Invitation;
use App\Models\User;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /*public function information(Post $post, Room $room)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.admin_postinformation')->with(['posts' => $post->get(), 'room' => $room]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }*/
    
    public function createinformation($id){
        return view('posts.admin_createpost')->with(['room_id'=> $id]);
    }
    
    public function store(Request $request, Post $post, Room $room){
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/admin/rooms/' . $room->id);
    }
    
    public function show(Post $post){
        return view('posts.admin_postsshow')->with(['post'=> $post]);
        
    }
}
