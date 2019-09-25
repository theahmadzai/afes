<?php

namespace App\Http\Controllers\Profile\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Auth;

class BillingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

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

            Session::flash('success', 'Successfuly Updated Payment Method!');
        } else {
            Session::flash('error', 'Please try again later!');
        }

        return back();
    }
}
