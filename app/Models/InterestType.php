<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'activity_interest_type')
            ->using(ActivityInterestType::class);
    }


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_preferences');
    }
}
