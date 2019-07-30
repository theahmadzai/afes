<?php

namespace App\Observers;

use App\Post;
use Illuminate\Support\Facades\Auth;

class PostObserver
{
    public function creating(Post $post)
    {
        $post->user_id = Auth::id();
    }
}
