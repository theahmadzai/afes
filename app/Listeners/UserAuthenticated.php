<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Jenssegers\Agent\Agent;
use Carbon\Carbon;
use Location;
use Auth;

class UserAuthenticated
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
    public function handle(Authenticated $event)
    {
        $location = Location::get();
        $agent = new Agent();

        $user = $event->user;

        $user->last_login_ip = request()->getClientIp();
        $user->last_login_location = "{$location->cityName}, {$location->regionName}, {$location->countryName}";
        $user->last_login_device = $agent->device();
        $user->last_login_platform = $agent->platform();
        $user->last_login_browser = $agent->browser();
        $user->last_login_date = Carbon::now();

        $user->save();
    }
}
