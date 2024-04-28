<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;



class Research extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;


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

    public function searchable()
    {
        return $this->morphOne(Searchable::class, 'searchable');
    }
}
