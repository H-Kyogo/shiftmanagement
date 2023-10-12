<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController as ProfileOfAdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {//ログインしているuserしかできないこと
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //招待されたユーザーが招待を受け入れるルーティング　ユーザーが招待コードを使用してルームに参加する
    Route::post('/rooms/join-by-invite', [RoomController::class, 'joinByInvite'])->name('rooms.joinByInvite');
    
    //user用のルーム詳細ページ
     Route::get('/rooms/{room}', [RoomController::class, 'showForUser']);// ユーザー
     
     
     Route::get('/posts/{post}',[PostController::class ,'show']);
    
});



Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth:admin', 'verified'])->name('dashboard');
    
    Route::middleware('auth:admin')->group(function () {//ログインしているAdminしかできないこと
        Route::get('/only', function () {
            return view('admin.test');//adminフォルダの中のテストブレードのこと
        });
        
        // ルーム関連のルーティング
        Route::get('/rooms/index', [RoomController::class, 'index'])->name('rooms.index');
        Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
        Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
        
        // 招待ページを表示するためのGETリクエストのルート
        Route::get('/rooms/{room}/invite', [RoomController::class, 'showInviteForm'])->name('rooms.inviteForm');
        
        // ユーザーを招待するためのPOSTリクエストのルート
        Route::post('/rooms/{room}/invite', [RoomController::class, 'processInvite'])->name('rooms.processInvite');
        
        //admin用のルーム詳細ページ
        Route::get('/rooms/{room}', [RoomController::class, 'showForAdmin']);// adminユーザー
        
        //お知らせ投稿画面
        Route::get('/rooms/{room}/information/create', [PostController::class, 'createinformation']);
        Route::post('/posts/{room}', [PostController::class, 'store']);
        
        //お知らせ詳細画面
        //Route::get('/rooms/{room}/information', [PostController::class, 'information']);
        
        //お知らせ表示画面
        Route::get('/posts/{post}',[PostController::class ,'show']);
        
        Route::get('/profile', [ProfileOfAdminController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileOfAdminController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileOfAdminController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/admin.php';
});
require __DIR__.'/auth.php';