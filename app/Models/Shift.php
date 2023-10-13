<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Shift extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        'room_id'
        //'category_id'
        ];
}
