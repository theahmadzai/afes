<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StoreSubscriber;
use App\Subscriber;

class SubscriberController extends Controller
{
    public function index()
    {
        return View::make('subscribe.index');
    }

    public function subscribe(StoreSubscriber $request)
    {
        Subscriber::create($request->validated());


        return View::make('flash.success', [
            'head' => 'Subscribed Successfuly!',
            'body' => 'You have subscribed to our newsletters, You will be able to receive our latest updates.',
        ]);
    }
}
