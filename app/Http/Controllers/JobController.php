<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Job;

class JobController extends Controller
{
    public function index()
    {
        return View::make('jobs.index', [
            'jobs' => Job::open()->latest()->paginate(4),
        ]);
    }

    public function show(Job $job)
    {
        return View::make('jobs.show', [
            'job' => $job,
        ]);
    }
}
