<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Category;
use App\GalleryItem;

class GalleryController extends Controller
{
    public function index()
    {
        return View::make('pages.gallery', [
            'categories' => Category::all(),
            'items' => GalleryItem::all(),
        ]);
    }
}
