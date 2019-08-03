<?php

namespace App\Observers;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Str;

class PostObserver
{
    public function creating(Post $post)
    {
        $post->slug = Str::slug($post->title);
        $post->user_id = Auth::id();
    }
}
