<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Auth;
use Socialite;
use Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $identities = [
            'facebook' => false,
            'twitter' => false,
        ];

        foreach(Auth::user()->identities as $identity) {
            $provider = strtolower($identity->provider_name);

            if(array_key_exists($provider, $identities)) {
                $identities[$provider] = true;
            }
        }

        return View::make('profile.index', [
            'identities' => $identities,
        ]);
    }

    public function update(Request $request)
    {
        $method = "update{$request->update}";
        if(method_exists($this, $method)) {
            return $this->$method($request);
        }

        return back();
    }

    private function updateProfile(Request $request)
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

        Auth::User()->avatar = $request->avatar;
        Auth::User()->name = $request->name;
        Auth::User()->gender = $request->gender;
        Auth::User()->city = $request->city;
        Auth::User()->address = $request->address;
        Auth::User()->phone = $request->phone;
        Auth::User()->birth_date = $request->birth_date;

        Auth::User()->save();

        if(Auth::User()->wasChanged()){
            return back()->with('status', 'Profile has been updated Successfuly!');
        }

        return back();
    }

    private function updateEmailAndUsername(Request $request)
    {
        Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(Auth::User())],
            'username' => ['nullable', 'string', 'min:5', 'max:25', 'unique:users'],
        ])->validate();

        Auth::User()->email = $request->email;
        Auth::User()->username = $request->username;
        Auth::User()->save();

        if(Auth::User()->wasChanged()) {
            return back()->with('status', 'Account Login Info Updated Successfuly!');
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

        Auth::User()->password = Hash::make($request->password);
        Auth::User()->save();

        return back()->with('status', 'Password Updated Successfuly!');
    }

    private function updateSocialAccounts(Request $request)
    {
        $identities = [];

        foreach(Auth::user()->identities as $identity) {
            $provider = strtolower($identity->provider_name);
            if(!$request->has($provider)) {
                $identity->delete();
            } else {
                $identities[$provider] = true;
            }
        }

        if($request->has('facebook') && !isset($identities['facebook'])) {
            return Socialite::driver('facebook')->redirect();
        }

        if($request->has('twitter') && !isset($identities['twitter'])) {
            return Socialite::driver('twitter')->redirect();
        }

        return back();
    }
}
