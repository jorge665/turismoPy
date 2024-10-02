<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourismOffice extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'address',
        'phone',
        'email',
        'latitude',
        'longitude',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function translations()
    {
        return $this->hasMany(OfficeTranslation::class);
    }
}
