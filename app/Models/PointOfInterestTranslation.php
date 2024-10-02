<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointOfInterestTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['point_of_interest_id', 'name', 'description'];

    public function pointOfInterest()
    {
        return $this->belongsTo(PointOfInterest::class);
    }
}
