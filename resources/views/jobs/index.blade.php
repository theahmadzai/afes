@extends('layouts.app')

@section('title', 'Jobs')

@section('content')

    @component('partials.head')
        Jobs Available
    @endcomponent

    <div class="container-fluid">

        <div class="row p-0 px-4 pt-4 pb-1">
            @foreach($jobs as $job)

                <div class="container-fluid mb-2 p-4 border bg-light" style="cursor:pointer;" onclick="window.location.href = '{{ url()->current() . '/' . $job->id }}'">
                    <div class="row">
                        <div class="col-sm-8 h5 mb-0">
                            <a href="{{ url()->current() . '/' . $job->id }}">{{ $job->title }}</a>
                        </div>
                        <div class="col-sm-2 text-right">{{ $job->location }}</div>
                        <div class="col-sm-2 text-right">{{ $job->closing_at->toFormattedDateString() }}</div>
                    </div>
                </div>

            @endforeach
        </div>

        <div class="row p-2 justify-content-center">
            <nav aria-label="Search Navigation Pages">
                {{ $jobs->links() }}
            </nav>
        </div>

    </div>

@endsection
