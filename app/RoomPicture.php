<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomPicture extends Model
{
    protected $fillable = [
        'id',
        'room_id',
        'picture',
        'picturePath'
    ];

    public function Room()
    {
        return $this->belongsTo(Room::class,'room_id','id');
    }
}
