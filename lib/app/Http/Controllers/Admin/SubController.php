<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddSubjectRequest;
use App\Models\Sub;
use App\Models\Room;
use App\Models\DSDK;
use Auth;
use DB;
use Session;


class SubController extends Controller
{
    public function getAddSub(){
    	$data0['room_list'] = Room::all();
        $data1['sub_list'] = DB::table('db_sub')->join('db_room', 'db_sub.room_id', '=', 'db_room.room_id')->orderBy('sub_id', 'desc')->get();
    	return view('backend.add', $data0, $data1);
    }

    public function postAddSub(AddSubjectRequest $request){
    	$sub = new Sub;
    	$sub->sub_id = $request->sub_id;
    	$sub->sub_name = $request->sub_name;
    	$sub->room_id = $request->room_id;
    	$sub->shift = $request->shift;
    	$sub->time = $request->calendar;
    	$sub->amount = $request->limit_sv;
    	$sub->save();
    	return back();
    }

    public function delSub($id){
    	Sub::destroy($id);
        return back();
    }
}
