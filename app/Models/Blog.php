<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;

    protected $guarded = [];

    public function translations()
    {
        return $this->hasMany(BlogTranslation::class, 'blog_id');
    }

    public function translation($lang = 'id')
    {
        return $this->translations->where('lang', $lang)->first();
    }

}
