<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalRequest extends Model
{
    protected $fillable = [
        'ref_hospital', 'bloodgroup', 'unit', 'date'
    ];

    protected $hidden = [];

    public $table = 'hospital_request';

    public $timestamps = false;
}
