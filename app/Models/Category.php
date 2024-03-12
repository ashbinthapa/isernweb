<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_visible',
        'seo_title',
        'seo_description'
    ];

    public function post(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}