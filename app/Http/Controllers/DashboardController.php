<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the user dashboard with their invitations.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        // ログインしているユーザーのIDを取得
        $userId = auth()->id();
    
        // ユーザーが参加しているルームを取得
        $rooms = Room::whereHas('users', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();
    
        // $rooms をビューに渡す
        return view('dashboard', compact('rooms'));
    }
}
