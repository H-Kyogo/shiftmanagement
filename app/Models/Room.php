<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Room extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'name',
        'admin_id',
        ];
    
    public function users(){
        return $this->belongsToMany(User::class)->withPivot('is_invited');
    }
    
    //変更前
    public function invitations(){
        //return $this->hasMany(Invitation::class);
        return $this->hasMany(Invitation::class, 'room_id');
    }
    
    //変更後
    public function admin(){
        return $this->belongsTo(User::class, 'admin_id');
    }
    
    //ここで招待コードを発行する
    protected static function boot(){
        parent::boot();
        static::creating(function ($room) {
            $room->invite_code = Str::random(10); // 10文字のランダム文字列
        });
    }
}
