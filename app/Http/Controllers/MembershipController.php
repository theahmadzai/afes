<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MembershipController extends Controller
{
    public function index()
    {
        return View::make('membership.index');
    }

    public function test(Request $request)
    {
        dd($request);
    }
}
