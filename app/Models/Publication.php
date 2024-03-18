<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;

class Publication extends Model implements HasMedia
{
    use HasFactory;

    use SoftDeletes;

    use InteractsWithMedia;
    
    protected $fillable = [
        'user_id',
        'publicationcategory_id',
        'title',
        'slug',
        'link',
        'year',
        'content',
        'meta_description',
        'is_featured',
        'is_published',
        'published_at',
        'seo_title',
        'seo_description',
        'image'
    ];

    /** @return BelongsTo<User,self> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /** @return BelongsTo<Category,self> */
    public function publicationcategory(): BelongsTo
    {
        return $this->belongsTo(PublicationCategory::class, 'publicationcategory_id');
    }
}
