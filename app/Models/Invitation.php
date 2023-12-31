<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    
    protected $fillable = [
        'user_id',
        'room_id',
        'invite_code',
        // その他のカラムも必要に応じて追加
    ];

}