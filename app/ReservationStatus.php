<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationStatus extends Model
{

    protected $fillable = [
        'name',
        'description',
        'sequence'
    ];
}
