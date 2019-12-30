<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Selected;	
use App\Models\Sub;
use App\Models\DSDK;
use App\Models\DSDKDK;
use Auth;
use DB;
use Session;
use PDF;
use App\Http\Requests\AddSelectedSubRequest;

class RegistController extends Controller
{
    public function getRegist(){
    	$data0['sub_list'] = DB::table('db_sub')->join('db_room', 'db_sub.room_id', '=', 'db_room.room_id')->orderBy('sub_id', 'desc')->get();
    	$data1['selected_list'] = DB::table('db_dsdki')->get();
        $dsdkdk = DSDKDK::all();
        view()->share('dsdkdk',$dsdkdk);
    	
        return view('backend.regist', $data0, $data1);
    }

    public function postSelected(Request $request){
 		if($request->ajax())
 		{	
 			$selected = new Selected([
 				'sv_id' => Auth::user()->id,
 				'sv_name' => Auth::user()->name,		
 				'sub_id' => $request->get('sub_id'),
 				'sub_name' => $request->get('sub_name'),
 				'room_id' => $request->get('room_id'),
 				'room_name' => $request->get('room_name'),
 				'time' => $request->get('time'),
 				'shift' => $request->get('shift')
 			]);
 			$selected->save();
 			return back()->with('message', 'success');
 		}
	}

    public function delete($id1){
        $selected = Selected::find('sub_id', $id1);
        if(! $selected){
            abort(404);
        }
        $selected->delete();
        return back();
    }
}
