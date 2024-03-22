<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;


class page extends Model implements HasMedia
{
    use HasFactory;

    use SoftDeletes;

    use InteractsWithMedia;

    const EXCERPT_LENGTH = 475;

    protected $fillable = [
        'user_id',
        'parent_id',
        'title',
        'slug',
        'content',
        'meta_description',
        'is_featured',
        'is_published',
        'published_at',
        'seo_title',
        'seo_description',
        'image'
    ];

    public function excerpt()
    {
        return Str::limit($this->content, Page::EXCERPT_LENGTH);
    }

    /** @return BelongsTo<User,self> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parent()
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Page::class, 'parent_id');
    }
}
