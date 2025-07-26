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

    public function getTitleAttribute()
    {
        $locale = session('locale', config('app.locale'));
        $translation = $this->translations->where('lang', $locale)->first();

        // Fallback ke bahasa Inggris jika tidak ada
        return $translation?->title ?? $this->translations->where('lang', 'en')->first()?->title;
    }

    public function getSubtitleAttribute()
    {
        $locale = session('locale', config('app.locale'));
        $translation = $this->translations->where('lang', $locale)->first();
        return $translation?->subtitle ?? $this->translations->where('lang', 'en')->first()?->subtitle;
    }

    public function getContentAttribute()
    {
        $locale = session('locale', config('app.locale'));
        $translation = $this->translations->where('lang', $locale)->first();
        return $translation?->content ?? $this->translations->where('lang', 'en')->first()?->content;
    }

	 public function getRouteKeyName()
	{
		return 'slug';
	}

}
