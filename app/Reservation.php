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

    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function Room()
    {
        return $this->belongsTo(Room::class,'room_id','id');
    }
    public function Client()
    {
        return $this->belongsTo(Client::class,'client_id','id');
    }
    public function ReservationStatus()
    {
        return $this->belongsTo(ReservationStatus::class,'reservation_status_id','id');
    }
    public function ReservationSource()
    {
        return $this->belongsTo(ReservationSource::class,'reservation_source_id','id');
    }

    public function ReservationTime()
    {
        return $this->belongsTo(ReservationTime::class,'reservation_time_id','id');
    }
}
