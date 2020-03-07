<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Auth;
use Socialite;

class AccountsController extends SettingsController
{
    public function index()
    {
        $identities = [
            'facebook' => false,
            'google' => false,
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
        ])->validate();

        Auth::user()->email = $request->email;
        Auth::user()->email_verified_at = null;
        Auth::user()->save();
        Auth::user()->sendEmailVerificationNotification();

        if(Auth::user()->wasChanged()) {
            Session::flash('success', 'Email Updated Successfuly!');
        }

        return Redirect::back();
    }

    public function updateAccount(Request $request)
    {
        if(!$request->has('account')) {
            return Redirect::back()->with('error', 'Trying to link an invalid social account.');
        }

        if($request->has('link')) {
            return Socialite::driver($request->account)->redirect();
        }

        Auth::user()->identities()->where('provider_name', $request->account)->delete();

        return Redirect::back()->with('success', 'Unlinked your ' . $request->account . ' account from profile.');
    }
}
