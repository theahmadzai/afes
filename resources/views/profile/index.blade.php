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
            <div class="col-md-8 table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email Address</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Gender</th>
                            <td>{{ $user->gender }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Birth Date</th>
                            <td>{{ $user->birth_date }}</td>
                        </tr>
                        <tr>
                            <th scope="row">City</th>
                            <td>{{ $user->city }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Phone</th>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Address</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <ul class="list-group list-group-flush">
        @foreach ($user->posts as $post)
            <a href="{{ url('blog/' . $post->slug) }}"><li class="list-group-item">{{ $post->title }}</li></a>
        @endforeach
        </ul>

    </div>


@endsection
