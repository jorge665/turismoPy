<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointOfInterest extends Model
{
    protected $table = 'points_of_interest';
    use HasFactory;

    protected $fillable = ['destination_id', 'latitude', 'longitude', 'accessibility_details', 'opening_hours', 'entry_fee'];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function translations()
    {
        return $this->hasMany(PointOfInterestTranslation::class);
    }

    public function media()
    {
        return $this->hasMany(PointOfInterestMedia::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
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
