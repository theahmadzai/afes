<?php


namespace App\Http\Controllers\Profile\Settings;

use App\Http\Controllers\Controller;

abstract class AbstractSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
