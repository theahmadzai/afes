<?php


namespace App\Http\Controllers\Profile\Settings;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
}
