<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = [

        'id',

        'user_id',

        'room_id',

        'client_id',

        'reservation_status_id',

        'reservation_source_id',

        'reservation_time_id',

        'start',

        'ends',

        'day'

    ];
}
