@extends('layouts.app')

@section('title', 'Jobs')

@section('content')
<div class="container">

    @component('partials.head')
        Jobs Available
    @endcomponent

    @foreach($jobs as $job)

        <div class="row rounded no-gutters overflow-hidden shadow-sm my-3 p-3">
            <h2>{{ $job->title }}</h2>
            <p>Posted Date: {{ $job->posted_at->diffForHumans() }}</p>
            <p>Closing Date: {{ $job->closing_at->diffForHumans() }}</p>
            <p class="card-text mb-auto">{{ str_limit($job->job_profile, 200) }}</p>
            <a href="{{ url('jobs/' . $job->id) }}">View</a>
        </div>

    @endforeach

    {{ $jobs->links() }}

</div>
@endsection
