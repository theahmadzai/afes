<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Hash;

class SecurityController extends SettingsController
{
    public function index()
    {
        return View::make('profile.settings.security');
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'current_password' => ['required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    return $fail('The current password is incorrect.');
                }
            }],
            'password' => ['required', 'min:8', 'confirmed', function ($attribute, $value, $fail) {
                if (Hash::check($value, Auth::user()->password)) {
                    return $fail('The current password cannot be same as new password.');
                }
            }],
        ])->validate();

        Auth::user()->password = Hash::make($request->password);
        Auth::user()->save();

        return Redirect::back()->with('success', 'Password Updated Successfuly!');
    }
}
