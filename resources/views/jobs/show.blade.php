@extends('layouts.app')

@section('title', $job->title)

@section('content')

    @component('partials.head')
        {{ $job->title }}
    @endcomponent

    <div class="container py-3">

        <table class="table table-borderless table-sm table-striped">
            <tbody>
                <tr>
                    <th scope="row">Department</th>
                    <td>{{ $job->department }}</td>
                    <th scope="row">Gender</th>
                    <td>{{ $job->gender }}</td>
                </tr>
                <tr>
                    <th scope="row">Minimum Education</th>
                    <td>{{ $job->minimum_education }}</td>
                    <th scope="row">Location</th>
                    <td>{{ $job->location }}</td>
                </tr>
                <tr>
                    <th scope="row">Required Languages</th>
                    <td>{{ $job->required_languages }}</td>
                    <th scope="row">Total Position(s)</th>
                    <td>{{ $job->total_positions }}</td>
                </tr>
                <tr>
                    <th scope="row">Shift</th>
                    <td>{{ $job->shift }}</td>
                    <th scope="row">Work Type</th>
                    <td>{{ $job->work_type }}</td>
                </tr>
                <tr>
                    <th scope="row">Experience</th>
                    <td>{{ $job->experience }}</td>
                    <th scope="row">Status</th>
                    <td>{{ $job->status }}</td>
                </tr>
                <tr>
                    <th scope="row">Date Posted</th>
                    <td>{{ $job->posted_at->diffForHumans() }}</td>
                    <th scope="row">Closing Date</th>
                    <td>{{ $job->closing_at->diffForHumans() }}</td>
                </tr>
            </tbody>
        </table>

        <div class="py-3">
            <h2>Profile</h2>
            {!! $job->job_profile !!}
        </div>

        <hr>

        <div class="py-3">
            <h2>Skills</h2>
            {!! $job->skills !!}
        </div>

        <hr>

        <div class="py-3">
            <h2>Tools</h2>
            {!! $job->tools !!}
        </div>

        <a class="btn btn-secondary my-3" href="{{ url()->current() }}/apply">Apply</a>
    </div>

@endsection
