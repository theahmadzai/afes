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
            ->create($request->validated())->file()
            ->create(['filename' => request()->resume->store('public/files')]);

        return View::make('flash.success');
    }
}
