<?php

namespace App\Http\Controllers\Profile\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Auth;
use Socialite;

class AccountsController extends Controller
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
            $identities[strtolower($identity->provider_name)] = true;
        }

        return View::make('profile.settings.accounts', compact('identities'));
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(Auth::user())],
            'username' => ['required', 'nullable', 'alpha_num', 'min:5', 'max:25', Rule::unique('users')->ignore(Auth::user())],
        ])->validate();

        Auth::user()->email = $request->email;
        Auth::user()->username = $request->username;
        Auth::user()->save();

        if(Auth::user()->wasChanged()) {
            Session::flash('success', 'Account Login Info Updated Successfuly!');
        }

        return back();
    }

    public function updateAccount(Request $request)
    {
        if(!$request->has('account')) {
            Session::flash('error', 'Trying to link an invalid social account.');
            return back();
        }

        if($request->has('link')) {
            return Socialite::driver($request->account)->redirect();
        }

        if(!Auth::user()->email) {
            Session::flash('error', 'You must have an email address before you remove your linked account.');
            return back();
        }

        Auth::user()->identities()->where('provider_name', $request->account)->delete();

        Session::flash('success', 'Unlinked your ' . $request->account . ' account from profile.');
        return back();
    }
}
