<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Category;
use App\GalleryItem;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $galleryItems = !empty($request->category)
                        ? GalleryItem::where('category_id', $request->category)
                        : new GalleryItem;

        return View::make('gallery.index', [
            'categories' => Category::all(),
            'items' => $galleryItems->paginate(8),
        ]);
    }
}
