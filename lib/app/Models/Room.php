<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'db_room';
    protected $primaryKey = 'room_id';
    protected $guarded = [];
}
