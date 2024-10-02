<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'language',
        'name',
        'description',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
