<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class SubscriptionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return View::make('profile.settings.subscriptions');
    }
}
