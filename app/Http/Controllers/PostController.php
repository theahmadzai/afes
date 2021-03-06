<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return View::make('blog.index', [
            'posts' => Post::published()->latest()->paginate(5),
        ]);
    }

    public function show(Post $post)
    {
        return View::make('blog.show', [
            'post' => $post,
            'latest' => Post::published()->latest()->take(5)->get(),
        ]);
    }
}
