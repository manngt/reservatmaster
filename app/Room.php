<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = [

        'id',

        'number',

        'location_id',

        'level_id',

        'room_type_id',

        'cost',

        'price',

        'picture_path',

        'picture'

    ];

    public function level()
    {

        return $this->belongsTo(Level::class,'level_id','id');

    }

    public function location()
    {

        return $this->belongsTo(Location::class,'location_id','id');

    }

    public function room_type()
    {

        return $this->belongsTo(RoomType::class, 'room_type_id', 'id');

    }

}