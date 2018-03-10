<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{

    protected $fillable = [

        'id',

        'name'

    ];

    public function rooms()
    {

        return $this->hasMany(Room::class,'level_id','id');

    }
}
