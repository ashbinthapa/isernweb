<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'start_date',
        'end_date',
        'seo_title',
        'seo_description',
        'image'
    ];
}
