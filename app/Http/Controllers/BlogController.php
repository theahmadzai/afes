<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        return View::make('pages.blog', [
            'posts' => Post::paginate(5),
        ]);
    }

    public function post(Post $post)
    {
        return View::make('pages.post', [
            'post' => $post,
        ]);
    }
}
