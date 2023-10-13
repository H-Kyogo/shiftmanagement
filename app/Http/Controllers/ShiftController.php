<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Room;
use App\Models\Invitation;
use App\Models\User;
use App\Models\Shift;
use Illuminate\Support\Str;


class ShiftController extends Controller
{
     public function createshift($id){
        return view('shifts.createshift')->with(['room_id'=> $id]);
    }
    
    public function storeshift(Request $request, Shift $shift, Room $room){
        $input = $request['shift'];
        $shift->fill($input)->save();
        return redirect('/admin/rooms/' . $room->id);
    }
    
    public function shiftshow(Shift $shift){
        return view('shifts.shiftshow')->with(['shift'=> $shift]);
        
    }
}
