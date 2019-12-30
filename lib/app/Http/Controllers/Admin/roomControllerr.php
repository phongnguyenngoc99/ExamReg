<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddRoomRequest;
use App\Models\Sub;
use App\Models\Room;
use App\Models\DSDK;
use Auth;
use DB;

class roomControllerr extends Controller
{
     public function getRoom(){
    	$data['room_list'] = Room::all();
    	return view('backend.manageRoom', $data);
    }

    public function postRoom(AddRoomRequest $request){
    	$room = new Room;
    	
    	$room->room_id = $request->room_id;
    	$room->room_name = $request->room_name;
    	
    	$room->save();
    	return back();
    }

    public function delRoom($id){
        Room::destroy($id);
        return back();
    }
}
