<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Auth;

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
        if($request->has('notifications') )
        {
            Auth::user()->notifications = true;
            Auth::user()->save();

            Session::flash('success', 'Email notifications has been turned on');
            return back();
        }

        Auth::user()->notifications = false;
        Auth::user()->save();

        Session::flash('success', 'Email notifications has been turned off');
        return back();
    }
}
