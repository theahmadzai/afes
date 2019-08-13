@extends('layouts.app')

@section('title', $job->title)

@section('content')
<div class="container my-5">

    <h3 class="mb-0">{{ $job->title }}</h3>
    <div class="mb-1 text-muted">{{ $job->posted_at->diffForHumans() }}</div>
    <div class="mb-1 text-muted">{{ $job->closing_at->diffForHumans() }}</div>
    <p class="card-text mb-auto">{{ $job->job_profile }}</p>
    <p class="card-text mb-auto">{{ $job->skills }}</p>
    <p class="card-text mb-auto">{{ $job->tools }}</p>
    <p class="card-text mb-auto">{{ $job->department }}</p>
    <p class="card-text mb-auto">{{ $job->gender }}</p>
    <a class="btn btn-primary" href="{{ url()->current() }}/apply">Apply</a>

</div>
@endsection
