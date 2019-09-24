<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','member']);
    }

    public function index()
    {
        return View::make('member.index');
    }
}
