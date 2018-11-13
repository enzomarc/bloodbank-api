<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloodbank extends Model
{
    protected $fillable = [
        'ref_hospital', 'AP', 'AM', 'BP', 'BM', 'ABP', 'ABM', 'OP', 'OM', 'Total'
    ];

    protected $hidden = [];

    protected $table = 'blood_bank';

    protected $primaryKey = 'ref_hospital';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;
}
