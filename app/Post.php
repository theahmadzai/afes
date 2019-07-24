<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $casts = [
        'published_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->user_id = auth()->user()->id;
        });
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
