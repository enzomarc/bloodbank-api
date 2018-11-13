<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'ref_hospital', 'id_user', 'donation_date', 'expiration_date', 'unit', 'donation_status', 'checked_by'
    ];

    protected $hidden = [];

    protected $primaryKey = 'id_donation';

    public $timestamps = false;
}
