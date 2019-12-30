<?php

namespace App\Imports;

use App\Models\DSDKDK;
use Maatwebsite\Excel\Concerns\ToModel;

class dskddkImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DSDKDK([
            'sv_id' => $row[0],
            'sv_name' => $row[1],
            'sub_id' => $row[2],
            'sub_name' => $row[3]
        ]);
    }
}
