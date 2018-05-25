<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontPage extends Model
{
    protected $fillable = [
        'title',
        'article',
        'order'
    ];
}
