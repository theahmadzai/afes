@extends('layouts.app')

@section('title', 'Jobs')

@section('content')
<div class="container my-5">

    @foreach($jobs as $job)

        <div class="row border rounded no-gutters overflow-hidden shadow-sm my-3 p-3">
            <h3 class="mb-0">{{ $job->title }}</h3>
            <div class="mb-1 text-muted">{{ $job->posted_at->diffForHumans() }}</div>
            <div class="mb-1 text-muted">{{ $job->closing_at->diffForHumans() }}</div>
            <p class="card-text mb-auto">{{ str_limit($job->job_profile, 200) }}</p>
            <a href="{{ url('jobs/' . $job->id) }}">View</a>
        </div>

    @endforeach

    {{ $jobs->links() }}

</div>
@endsection
