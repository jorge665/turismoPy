<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function translations()
    {
        return $this->hasMany(NewsTranslation::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
