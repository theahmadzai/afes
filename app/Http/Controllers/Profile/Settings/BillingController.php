<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Auth;

class BillingController extends SettingsController
{
    public function index()
    {
        return View::make('profile.settings.billing');
    }

    public function update(Request $request)
    {
        if(!Auth::user()->hasPaymentMethod()) {
            Auth::user()->createAsStripeCustomer();
        }

        if($request->has('payment_method')) {
            Auth::user()->updateDefaultPaymentMethod($request->payment_method);
            Auth::user()->updateDefaultPaymentMethodFromStripe();

            Redirect::back()->with('success', 'Successfuly Updated Payment Method!');
        }

        return Redirect::back()->with('error', 'Please try again later!');
    }
}
