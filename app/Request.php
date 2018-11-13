<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'ref_hospital', 'id_user', 'bloodgroup', 'request_date', 'received_date', 'unit', 'request_status', 'checked_by'
    ];

    protected $hidden = [];

    protected $primaryKey = 'id_request';

    public $timestamps = false;
}
