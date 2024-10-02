<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'tourism_office_id',
        'language',
        'name',
        'description',
    ];

    public function tourismOffice()
    {
        return $this->belongsTo(TourismOffice::class);
    }
}
