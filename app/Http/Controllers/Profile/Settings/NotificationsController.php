<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Auth;

class NotificationsController extends SettingsController
{
    public function index()
    {
        return View::make('profile.settings.notifications');
    }

    public function update(Request $request)
    {
        if($request->has('notifications')) {
            Auth::user()->notifications = true;
            Auth::user()->save();

            return Redirect::back()->with('success', 'Email notifications has been turned on');
        }

        Auth::user()->notifications = false;
        Auth::user()->save();

        return Redirect::back()->with('success', 'Email notifications has been turned off');
    }
}
