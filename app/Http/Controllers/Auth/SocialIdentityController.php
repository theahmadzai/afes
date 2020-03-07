<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Socialite;
use App\SocialIdentity;
use App\User;

class SocialIdentityController extends Controller
{
    private $providers = ['facebook', 'google'];

    public function __construct()
    {
        $this->middleware('guest')->except('handleProviderCallback');
    }

    public function redirectToProvider(string $provider)
    {
        if(in_array($provider, $this->providers)) {
            return Socialite::driver($provider)->redirect();
        }

        abort(404);
    }

    public function handleProviderCallback(string $provider)
    {
        if(!in_array($provider, $this->providers)) {
            abort(404);
        }

        try {
            $account = Socialite::driver($provider)->user();
        } catch(Exception $ex) {
            return Redirect::route('register');
        }

        if(!$this->getIdentity($provider, $account)) {

            if(!Auth::check()) {
                return Redirect::route('register')->withInput([
                    'email' => $account->getEmail(),
                    'avatar' => $account->getAvatar(),
                    'name' => $account->getName()
                ]);
            }

            Auth::user()->identities()->create([
                'provider_id' => $account->getId(),
                'provider_name' => $provider,
            ]);

            if(!Auth::check()) {
                Auth::login($user, true);

                return redirect('profile/settings/accounts');
            }

            Session::flash('success', 'Linked an account from ' . $provider . '!');
            return back();
        }

        if(!Auth::check()) {
            $identity = $this->getIdentity($provider, $account);
            Auth::login($identity->user);

            return back();
        }

        Session::flash('error', 'This account is already linked to another user.');
        return back();
    }

    private function getIdentity(string $provider, $account)
    {
        return SocialIdentity::where([
            'provider_name' => $provider,
            'provider_id' => $account->getId(),
        ])->first();
    }
}
