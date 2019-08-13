<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ApplicationRequest;
use App\Application;
use App\Job;

class ApplicationController extends Controller
{
    public function create()
    {
        return View::make('jobs.apply');
    }

    public function store(ApplicationRequest $request, Job $job)
    {
        $job->applications()->create($request->validated());

        return View::make('flash.success', [
            'header' => 'Application Sent',
            'body' => 'Your application has been received successfuly and will be reviwed in few days please wait for our notification!',
        ]);
    }
}
