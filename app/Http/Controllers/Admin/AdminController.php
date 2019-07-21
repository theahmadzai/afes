<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function constructor()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.index');
    }
}
