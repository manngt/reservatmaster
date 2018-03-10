<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{

    protected $fillable = [

        'id',

        'name',

        'description'

    ];

    public function rooms()
    {

        return $this->hasMany(Room::class,'room_type_id','id');

    }
}
