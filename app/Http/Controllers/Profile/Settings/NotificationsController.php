<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class NotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return View::make('profile.settings.notifications');
    }

    public function update(Request $request)
    {
        return back();
    }
}
