<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentityDocumentType extends Model
{

    protected $fillable = [
        'id',
        'name',
        'description'
    ];

    public function Clients()
    {
        return $this->belongsTo(Client::class,'identity_document_type_id','id');
    }
}
