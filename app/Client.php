<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [

        'id',
        'identity_document_type_id',
        'identity_number',
        'country_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'birthday',

    ];

    public function DocumentType()
    {
        return $this->belongsTo(IdentityDocumentType::class,'identity_document_type_id','id');
    }

    public function Country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
}
