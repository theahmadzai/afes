<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about.chairman-message.blade.php');
    }
}
