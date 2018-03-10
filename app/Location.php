<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $fillable = [

        'id',

        'name',

        'description'

    ];

    public function rooms()
    {

        return $this->hasMany(Room::class,'location_id','id');

    }
}
