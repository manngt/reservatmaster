<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $incrementing = false;
    protected $fillable = [

        'id',

        'name'

    ];

    public function Clients()
    {
        return $this->belongsTo(Client::class,'country_id','id');
    }
}
