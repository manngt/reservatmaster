<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomFeature extends Model
{
    protected $fillable = [
        'room_id',
        'feature'
    ];

    public function Room()
    {
        return $this->belongsTo(Room::class,'room_id','id');
    }
}
