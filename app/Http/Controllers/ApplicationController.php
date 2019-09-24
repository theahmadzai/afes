<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreApplication;
use App\Application;
use App\Job;
use App\File;

class ApplicationController extends Controller
{
    public function create()
    {
        return View::make('jobs.apply');
    }

    public function store(StoreApplication $request, Job $job)
    {
        $job->applications()
            ->create($request->validated())
            ->file()
            ->create(['filename' => request()->resume->store('files', 'public')]);

        return View::make('flash.success', [
            'head' => 'Application Sent!',
            'body' => 'Your application has been received successfuly and will be reviwed in few days please wait for our notification!',
        ]);
    }
}
