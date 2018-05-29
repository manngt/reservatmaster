<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected  $fillable = [
        'id',
        'client_id'
    ];

    public function Client()
    {
        return $this->belongsTo(Client::class,'client_id','id');
    }

    public function CheckDetails()
    {
        return $this->hasMany(CheckDetail::class,'check_id','id');
    }

    public function TotalAmount()
    {
        $total = 0;
        foreach ($this->CheckDetails as $detail)
        {
            $total = $total + $detail->amount;
        }

        return $total;
    }
}
