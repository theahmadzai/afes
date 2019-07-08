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

    public function contact()
    {
        return view('pages.contact');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function about()
    {
        return view('pages.about.chairman-message');
    }

    public function about1()
    {
        return view('pages.about.organizational-strategy');
    }

    public function about2()
    {
        return view('pages.about.board-of-directors');
    }

    public function about3()
    {
        return view('pages.about.statutes-and-by-laws');
    }
}
