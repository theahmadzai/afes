<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about()
    {
        return redirect('about/chairman-message');
    }

    public function about_chairmanMessage()
    {
        return view('pages.about.chairman-message');
    }

    public function about_organizationalStrategy()
    {
        return view('pages.about.organizational-strategy');
    }

    public function about_boardOfDirectors()
    {
        return view('pages.about.board-of-directors');
    }

    public function about_statutesAndByLaws()
    {
        return view('pages.about.statutes-and-by-laws');
    }
}
