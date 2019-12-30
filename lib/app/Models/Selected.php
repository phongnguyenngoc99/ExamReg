<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Selected extends Model
{
	protected $table = 'db_dsdki';
	//protected $primaryKey = ['sub_id', 'sv_id', 'room_id'];
	protected $fillable = ['sv_id','sv_name','sub_id', 'sub_name','room_id', 'room_name', 'shift', 'time'];
	protected $guarded = [];
}
