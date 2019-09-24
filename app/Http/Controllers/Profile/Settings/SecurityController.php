<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Auth;
use Hash;

class SecurityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return View::make('profile.settings.security');
    }

    public function update(Request $request)
    {
        $method = "update{$request->update}";
        if(method_exists($this, $method)) {
            return $this->$method($request);
        }

        return back();
    }

    private function updateEmailAndUsername(Request $request)
    {
        Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(Auth::user())],
            'username' => ['nullable', 'string', 'min:5', 'max:25', 'unique:users'],
        ])->validate();

        Auth::user()->email = $request->email;
        Auth::user()->username = $request->username;
        Auth::user()->save();

        if(Auth::user()->wasChanged()) {
            Session::flash('success', 'Account Login Info Updated Successfuly!');
        }

        return back();
    }

    private function updatePassword(Request $request)
    {
        Validator::make($request->all(), [
            'current_password' => ['required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            'password' => ['required', 'min:8', 'confirmed', function ($attribute, $value, $fail) {
                if (Hash::check($value, Auth::user()->password)) {
                    return $fail(__('The current password cannot be same as new password.'));
                }
            }],
        ])->validate();

        Auth::user()->password = Hash::make($request->password);
        Auth::user()->save();

        Session::flash('success', 'Password Updated Successfuly!');
        return back();
    }
}
