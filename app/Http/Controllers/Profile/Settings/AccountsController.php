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
            $provider = strtolower($identity->provider_name);

            if(array_key_exists($provider, $identities)) {
                $identities[$provider] = true;
            }
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
        $identities = [];

        foreach(Auth::user()->identities as $identity) {
            $provider = strtolower($identity->provider_name);
            if(!$request->has($provider)) {
                if(!Auth::user()->email) {
                    Session::flash('error', 'You need to have email address first, te remove linked acccounts.');
                    return back();
                }
                $identity->delete();
            } else {
                $identities[$provider] = true;
            }
        }

        if($request->has('facebook') && !isset($identities['facebook'])) {
            return Socialite::driver('facebook')->redirect();
        } else if($request->has('twitter') && !isset($identities['twitter'])) {
            return Socialite::driver('twitter')->redirect();
        }

        return back();
    }
}
