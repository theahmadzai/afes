<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return View::make('profile.index');
    }

    public function updateProfile(Request $request)
    {
        return back()->withInput();
    }
}
