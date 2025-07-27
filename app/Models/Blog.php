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
        return $this->hasMany(BlogTranslation::class);
    }

   public function translation_id()
    {
        return $this->hasOne(BlogTranslation::class)->where('lang', 'id');
    }

   public function translation_en()
    {
        return $this->hasOne(BlogTranslation::class)->where('lang', 'en');
    }

	 public function getRouteKeyName()
	{
		return 'slug';
	}

}
