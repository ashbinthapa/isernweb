<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class Post extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $requiredFields = ['title', 'slug'];
            foreach ($requiredFields as $field) {
                if (empty($post->$field)) {
                    throw ValidationException::withMessages([
                        $field => 'This field is required.',
                    ]);
                }
            }
        });
    }

    public function excerpt()
    {
        return Str::limit($this->content, Post::EXCERPT_LENGTH);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function searchable()
    {
        return $this->morphOne(Searchable::class, 'searchable');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
