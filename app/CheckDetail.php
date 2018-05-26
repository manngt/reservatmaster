<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckDetail extends Model
{

    protected $fillable = [
        'id',
        'check_id',
        'description',
        'amount',

    ];

    public function Check()
    {
        return $this->belongsTo(Check::class,'check_id','id');
    }
}
