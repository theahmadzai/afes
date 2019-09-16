@extends('layouts.app')

@section('title', 'Jobs')

@section('content')

    @component('partials.head')
        Jobs Available
    @endcomponent

    <div class="container">

        @foreach($jobs as $job)

            <div class="row rounded no-gutters overflow-hidden shadow-sm my-3 p-3">
                <h2><a href="{{ url('jobs/' . $job->id) }}">{{ $job->title }}</a></h2>
                <p>{{ str_limit($job->job_profile, 200) }}</p>
                <p><b>Closting at</b> {{ $job->closing_at->diffForHumans() }}</p>
            </div>

        @endforeach

        {{ $jobs->links() }}

    </div>

@endsection
