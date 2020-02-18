@extends('layouts.app')

@section('title', $user->name)

@section('content')

    @component('partials.head')
        Profile
    @endcomponent

    <div class="container p-4">

        <div class="row">
            <div class="col-md-4">
                <img src="{{ $user->gravatar }}" alt="{{ $user->name }}" class="w-100 shadow img-thumbnail mb-2">
            </div>
            <div class="col-md-4">
                <p><b>Name</b></p>
                <p><b>Username</b></p>
                <p><b>Email Address</b></p>
                <p><b>Gender</b></p>
                <p><b>Email Address</b></p>
                <p><b>Email Address</b></p>
            </div>
            <div class="col-md-4">
                <p>{{ $user->name }}</p>
                <p>{{ $user->username }}</p>
                <p>{{ $user->email }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>Name</p>
            </div>
            <div class="col-md-4">
                <p>{{ $user->name }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>Username</p>
            </div>
            <div class="col-md-4">
                <p>{{ $user->username }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>Email Address</p>
            </div>
            <div class="col-md-4">
                <p>{{ $user->email }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>Gender</p>
            </div>
            <div class="col-md-4">
                <p>{{ ucfirst($user->gender) }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>Birth Date</p>
            </div>
            <div class="col-md-4">
                <p>{{ $user->birth_date }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>City</p>
            </div>
            <div class="col-md-4">
                <p>{{ $user->city }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>Address</p>
            </div>
            <div class="col-md-4">
                <p>{{ $user->address }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>Phone</p>
            </div>
            <div class="col-md-4">
                <p>{{ $user->phone }}</p>
            </div>
        </div>

        <table class="table table-striped">
        @foreach ($user->posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ str_limit($post->body, 150) }}</td>
            </tr>
        @endforeach
        </table>

    </div>


@endsection
