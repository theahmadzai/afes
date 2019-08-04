<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Job;

class JobController extends Controller
{
    public function index()
    {
        return View::make('pages.jobs', [
            'jobs' => Job::open()->paginate(5),
        ]);
    }
}
