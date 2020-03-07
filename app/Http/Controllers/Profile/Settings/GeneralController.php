<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Auth;

class GeneralController extends SettingsController
{
    public function index()
    {
        return View::make('profile.settings.general');
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'avatar' => ['nullable', 'string'],
            'name' => ['nullable', 'required', 'string', 'min:5', 'max:255'],
            'gender' => ['nullable', 'in:male,female'],
            'city' => ['nullable', 'string', 'min:3', 'max:25'],
            'address' => ['nullable', 'string', 'min:10', 'max:255'],
            'phone' => ['nullable', 'digits_between:8,15'],
            'birth_date' => ['nullable', 'date'],
        ])->validate();

        Auth::user()->avatar = $request->avatar;
        Auth::user()->name = $request->name;
        Auth::user()->gender = $request->gender;
        Auth::user()->city = $request->city;
        Auth::user()->address = $request->address;
        Auth::user()->phone = $request->phone;
        Auth::user()->birth_date = $request->birth_date;
        Auth::user()->save();

        if(Auth::user()->wasChanged()){
            Session::flash('success', 'Profile has been updated Successfuly!');
        }

        return Redirect::back();
    }
}
