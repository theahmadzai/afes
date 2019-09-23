<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Socialite;
use App\SocialIdentity;
use App\User;

class SocialIdentityController extends Controller
{
    private $providers = ['facebook', 'twitter'];

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

        if(!session()->has('url.intended')) {
            session()->put('url.intended', url()->previous());
        }

        try {
            $identity = Socialite::driver($provider)->user();
        } catch(Exception $ex) {
            return redirect('login');
        }

        $user = $this->loginWithSocialIdentity($provider, $identity);

        if(!$user) {
            if(Auth::check()) {
                return redirect()->intended('/')->with('status', 'This account is already linked to another user.');
            }

            return redirect('login')->with('status', 'An account with the same credentials already exists, Click "Forgot Your Password" to recover.');
        }

        if(!Auth::check()) {
            Auth::login($user, true);
        }

        return redirect()->intended('/');
    }

    private function loginWithSocialIdentity(string $provider, $identity)
    {
        $socialIdentity = SocialIdentity::where([
                'provider_name' => $provider,
                'provider_id' => $identity->getId(),
            ])->first();

        if(! $socialIdentity) {
            return $this->loginWithUser($provider, $identity);
        }

        if(Auth::check()) {
            return false;
        }

        return $socialIdentity->user;
    }

    private function loginWithUser(string $provider, $identity)
    {
        $user = null;

        if(!Auth::check()) {
            $user = User::where('email', $identity->getEmail())->first();

            if($user && $identity->getEmail() != null) {
                return false;
            }

            $user = User::create([
                'avatar' => $identity->getAvatar(),
                'email' => $identity->getEmail(),
                'name' => $identity->getName(),
            ]);
        } else {
            $user = Auth::user();
        }

        $user->identities()->create([
            'provider_id' => $identity->getId(),
            'provider_name' => $provider,
        ]);

        return $user;
    }
}
