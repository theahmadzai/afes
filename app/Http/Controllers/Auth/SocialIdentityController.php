<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
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

        try {
            $account = Socialite::driver($provider)->user();
        } catch(Exception $ex) {
            return redirect('login');
        }

        if(!$this->getIdentity($provider, $account)) {
            $user = Auth::check() ? Auth::user() : $this->createUserFromAccount($account);
            $this->associateIdentity($provider, $account, $user);

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

    private function associateIdentity(string $provider, $account, $user)
    {
        $user->identities()->create([
            'provider_id' => $account->getId(),
            'provider_name' => $provider,
        ]);
    }

    private function createUserFromAccount($account)
    {
        $username = $account->getNickname() ?? explode('@', $account->getEmail())[0];
        while(User::where('username', $username)->first()) {
            $username = $username . rand(100,10000);
        }

        $email = $account->getEmail();
        if($email && User::where('email', $email)->first()) {
            $email = null;
        }

        return User::create([
            'username' => $username,
            'email' => $email,
            'avatar' => $account->getAvatar(),
            'name' => $account->getName(),
        ]);
    }
}
