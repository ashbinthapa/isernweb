<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'research_status',
        'slug',
        'content',
        'published_at',
        'seo_title',
        'seo_description',
        'image'
    ];
}
