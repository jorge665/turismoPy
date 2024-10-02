<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationMedia extends Model
{
    use HasFactory;

    protected $fillable = ['destination_id', 'media_type', 'url', 'caption'];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
