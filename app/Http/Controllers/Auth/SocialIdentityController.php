<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;
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

            $identity = SocialIdentity::where([
                'provider_name' => $provider,
                'provider_id' => $account->getId(),
            ])->first();

            if(!Auth::check()) {
                if(!$identity) {
                    return Redirect::route('register')->withInput([
                        'email' => $account->getEmail(),
                        'avatar' => $account->getAvatar(),
                        'name' => $account->getName(),
                        'provider_name' => $provider,
                        'provider_id' => $account->getId(),
                    ]);
                }

                Auth::login($identity->user);
                return Redirect::back();
            }

            if(!$identity) {
                Auth::user()->identities()->create([
                    'provider_name' => $provider,
                    'provider_id' => $account->getId(),
                ]);

                return Redirect::back()->with('success', 'Linked an account from ' . $provider . '!');
            }

            return Redirect::back()->with('error', 'This account is already linked to another user.');

        } catch(\Exception $ex) {
            return Redirect::back();
        }
    }
}
