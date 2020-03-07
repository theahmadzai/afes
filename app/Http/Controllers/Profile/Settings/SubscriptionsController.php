<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Support\Facades\View;

class SubscriptionsController extends SettingsController
{
    public function index()
    {
        return View::make('profile.settings.subscriptions');
    }
}
