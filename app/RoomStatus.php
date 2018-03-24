<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomStatus extends Model
{
    protected $fillable = [

        'id',

        'sequence',

        'name',

        'description'

    ];

    public function rooms()
    {

        return $this->hasMany(Room::class,'room_status_id','id');

    }
}
