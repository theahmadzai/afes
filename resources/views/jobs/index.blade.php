@extends('layouts.app')

@section('title', 'Jobs')

@section('content')

    @component('partials.head')
        Jobs Available
    @endcomponent

    <div class="container py-3">

        @foreach($jobs as $job)

            <div class="subHeading" onclick="window.location.href = '{{ url('jobs/' . $job->id) }}'">
                <span><a href="{{ url('jobs/' . $job->id) }}">{{ $job->title }}</a></span>
                <span>{{ $job->location }}</span>
                <span>Apply by: {{ $job->closing_at->toFormattedDateString() }}</span>
            </div>

        @endforeach

        <div class="row justify-content-center align-items-center mt-3">
            {{ $jobs->links() }}
        </div>

    </div>

@endsection
