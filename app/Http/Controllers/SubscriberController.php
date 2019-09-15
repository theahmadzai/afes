<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StoreSubscriber;
use App\Subscriber;

class SubscriberController extends Controller
{
    public function create()
    {
        return View::make('subscribe.index');
    }

    public function store(StoreSubscriber $request)
    {
        Subscriber::create($request->validated());

        return View::make('flash.success');
    }
}
