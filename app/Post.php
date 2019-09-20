<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\Imagify;

class Post extends Model
{
    use Imagify;

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopePublished(Builder $query)
    {
        return $query->where('is_published', true);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
