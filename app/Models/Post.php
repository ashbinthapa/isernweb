<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;



class Post extends Model implements HasMedia
{
    use HasFactory;

    use SoftDeletes;

    use InteractsWithMedia;

    const EXCERPT_LENGTH = 100;

    protected $fillable = [
        'user_id',
        'category_id',
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
        return Str::limit($this->content, Post::EXCERPT_LENGTH);
    }

    /** @return BelongsTo<User,self> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /** @return BelongsTo<Category,self> */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /** @return MorphMany<Comment> */
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }


}