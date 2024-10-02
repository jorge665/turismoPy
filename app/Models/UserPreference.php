<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserPreference extends Pivot
{
    protected $table = 'user_preferences';

    protected $fillable = [
        'user_id',
        'interest_type_id',
    ];

    public $timestamps = false;
}
