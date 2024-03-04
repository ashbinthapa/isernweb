<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'download_status',
        'seo_title',
        'seo_description',
        'image'
    ];
}
