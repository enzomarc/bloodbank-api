<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'ref_hospital', 'bloodgroup', 'units', 'date', 'price'
    ];

    protected $hidden = [];

    public $timestamps = false;
}
