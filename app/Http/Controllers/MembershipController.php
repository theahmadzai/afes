<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Auth;

class MembershipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        return View::make('membership.index');
    }

    public function subscribe(Request $request)
    {
        if(! Auth::user()->hasPaymentMethod()) {
            return redirect('profile/settings/billing');
        }

        $memberships = [
            'institutional' => [
                'name' => 'Institutional Membership',
                'plan' => 'plan_Fd3PcLuTiwv6Th',
            ],
            'professional' => [
                'name' => 'Individual - Professional Membership',
                'plan' => 'plan_Fd3Fdc2M1zaKmG',
            ],
            'student' => [
                'name' => 'Individual - Student Membership',
                'plan' => 'plan_Fd3E3WHL2lQhYl',
            ],
        ];

        if(!$request->has('membership') || !array_key_exists($request->membership, $memberships)) {
            Session::flash('error', 'Please try again later!');
            return back();
        }

        if(Auth::user()->subscribed($request->membership)) {
            Auth::user()->subscription($request->membership)->incrementQuantity();
            Session::flash('success', 'Thank you for extending your ' . $memberships[$request->membership]['name'] . '!');
            return back();
        }

        Auth::user()->newSubscription(
            $request->membership,
            $memberships[$request->membership]['plan'])->create();

        Session::flash('success', 'Enjoy your new ' . $memberships[$request->membership]['name'] . '!');
        return back();
    }

    public function success(Request $request)
    {
        dd($request);
    }

    public function cancel(Request $request)
    {
        dd($request->all());
    }
}
