<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuideTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'guide_id',
        'language',
        'title',
        'content',
    ];

    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }
}
