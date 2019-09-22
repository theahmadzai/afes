<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Socialite;
use App\SocialIdentity;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated()
    {
        $user = Auth::user();
        $user->last_login_ip = 0;

    }

    public function redirectToProvider(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback(string $provider)
    {
        try {
            $identity = Socialite::driver($provider)->user();
        } catch(Exception $ex) {
            return redirect('login');
        }

        $user = $this->loginWithSocialIdentity($provider, $identity);

        if(!$user) {
            return redirect('login')->with('status', 'An account with the same credentials already exists, Click "Forgot Your Password" to recover.');
        }

        Auth::login($user, true);

        return redirect($this->redirectTo);
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

        return $socialIdentity->user;
    }

    private function loginWithUser(string $provider, $identity)
    {
        $user = User::where('email', $identity->getEmail())->first();

        if($user && $identity->getEmail()) {
            return false;
        }

        $user = User::create([
            'username' => $identity->getNickname(),
            'avatar' => $identity->getAvatar(),
            'email' => $identity->getEmail(),
            'name' => $identity->getName(),
        ]);

        $user->identities()->create([
            'provider_id' => $identity->getId(),
            'provider_name' => $provider,
        ]);

        return $user;
    }
}
