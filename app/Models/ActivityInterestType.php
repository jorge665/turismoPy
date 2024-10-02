<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ActivityInterestType extends Pivot
{
    protected $table = 'activity_interest_type';

    protected $fillable = [
        'activity_id',
        'interest_type_id',
        // Agrega otros campos si es necesario
    ];

    public $timestamps = false;
}
