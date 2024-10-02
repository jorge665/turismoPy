<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointOfInterestMedia extends Model
{
    use HasFactory;

    protected $fillable = ['point_of_interest_id', 'media_type', 'url', 'caption'];

    public function pointOfInterest()
    {
        return $this->belongsTo(PointOfInterest::class);
    }
}
