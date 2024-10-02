<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'start_date',
        'end_date',
        'schedule',
        'price',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function translations()
    {
        return $this->hasMany(EventTranslation::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
