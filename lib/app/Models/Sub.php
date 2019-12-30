<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    protected $table = 'db_sub';
    protected $primaryKey = 'sub_id';
    protected $fillable = ['sub_id', 'sub_name', 'shift', 'time', 'room_id', 'amount'];
    protected $guarded = [];
}
