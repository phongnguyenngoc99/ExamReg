<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Selected;	
use App\Models\Sub;
use App\Models\DSDK;
use Auth;
use DB;



class printController extends Controller
{
     public function getPrint(){
    	$data['selected_list'] = DB::table('db_dsdki')->get();
    		return view('backend.print', $data);
    }
}
