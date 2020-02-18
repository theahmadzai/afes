<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Jenssegers\Agent\Agent;
use Carbon\Carbon;
use Location;
use Auth;

class UserLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Authenticated  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $location = Location::get();
        $agent = new Agent();

        $city = $location->cityName ?? 'Ashburn';
        $region = $location->regionName ?? 'Virginia';
        $country = $location->countryName ?? 'United States';

        $event->user->logins()->create([
            'ip' => request()->getClientIp(),
            'location' => "{$city}, {$region}, {$country}",
            'device' => $agent->device(),
            'platform' => $agent->platform(),
            'browser' => $agent->browser(),
            'date' => Carbon::now(),
            'is_mobile' => $agent->isMobile(),
        ]);
    }
}
