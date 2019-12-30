<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sub;
use App\Models\Room;
use App\Models\DSDK;
use Auth;
use DB;
use Validator;
use App\Exports\UserExport;
use App\Imports\UserImport;
use App\Imports\dskddkImport;
use Maatwebsite\Excel\Facades\Excel;


class addSvController extends Controller
{
    public function getAddSv(){
    	return view('backend.manageSV');
    }

    public function import(){
    	Excel::import(new UserImport, request()->file('file'));
    	return back()->with('success','Successfully Student Added');
    }

    public function importSVx(){
    	Excel::import(new dskddkImport, request()->file('xfile'));
    	return back()->with('success','Successfully Student Added');
	}
}

