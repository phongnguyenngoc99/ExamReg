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


class ExportPDFController extends Controller
{
    public function exportPDF(){
        $data1['selected_list'] = DB::table('db_dsdki')->get();
        $pdf = PDF::loadView('backend.print', $data1);
        $pdf->save(storage_path().'_filename.pdf');
        return $pdf->download('phieuduthi.pdf');
    }
}
