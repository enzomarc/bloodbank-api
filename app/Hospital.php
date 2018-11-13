<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'ref_hospital', 'hospital_name', 'hospital_city', 'hospital_country', 'password'
    ];

    protected $hidden = [
        'password'
    ];

    protected $primaryKey = 'ref_hospital';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;
}
