<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Image;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $images = !empty($request->category)
                        ? Image::where('category_id', $request->category)
                        : new Image;

        return View::make('gallery.index', [
            'categories' => Category::all(),
            'items' => $images->paginate(8),
        ]);
    }
}
