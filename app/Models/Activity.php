<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['destination_id', 'point_of_interest_id', 'duration', 'schedule', 'price'];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function pointOfInterest()
    {
        return $this->belongsTo(PointOfInterest::class);
    }

    public function translations()
    {
        return $this->hasMany(ActivityTranslation::class);
    }

    public function interestTypes()
    {
        return $this->belongsToMany(InterestType::class, 'activity_interest_type')
            ->using(ActivityInterestType::class);
    }


    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favorable');
    }

}
