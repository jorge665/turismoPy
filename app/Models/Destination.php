<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'latitude', 'longitude', 'status'];
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function translations()
    {
        return $this->hasMany(DestinationTranslation::class);
    }

    public function media()
    {
        return $this->hasMany(DestinationMedia::class);
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favorable');
    }

    public function pointsOfInterest()
    {
        return $this->hasMany(PointOfInterest::class);
    }

    public function social_links()
    {
        return $this->hasMany(SocialLink::class);
    }
}
