<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'ref_hospital', 'username', 'password', 'account_type'
    ];

    protected $hidden = [
        'id'
    ];

    public $timestamps = false;
}
