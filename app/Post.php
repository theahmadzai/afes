<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Storage;

class Post extends Model
{
    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getThumbnailPathAttribute()
    {
        return $this->image ? $this->image->thumbnailPath : Storage::disk('public')->url('thumbnails/default.png');
    }

    public function getImagePathAttribute()
    {
        return $this->image ? $this->image->imagePath : Storage::disk('public')->url('images/default.png');
    }

    public function scopePublished(Builder $query)
    {
        return $query->where('is_published', true);
    }

    public function scopeSlide(Builder $query)
    {
        return $query->where('slide', true);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
