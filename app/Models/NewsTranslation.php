<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id',
        'language',
        'title',
        'content',
    ];

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
