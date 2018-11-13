<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'name', 'phone', 'password', 'bloodgroup', 'birthdate', 'gender', 'city', 'profile_img'
    ];

    protected $hidden = [
        'password'
    ];

    protected $primaryKey = 'id_user';

    public $timestamps = false;
}
