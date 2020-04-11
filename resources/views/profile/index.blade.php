@extends('layouts.app')

@section('title', $user->name)

@section('content')

    @component('partials.head')
        Profile
    @endcomponent

    <div class="container pb-3">

        <div class="row justify-content-center bg-light py-5">
            <div class="col-md-8">
                <h2 class="h1" style="font-family:'Lato';">
                    {{ $user->name }}
                    @if (Auth::check() && Auth::user()->id == $user->id)
                        <a href="/profile/settings/general" class="btn btn-sm btn-outline-dark ml-4">edit profile</a>
                    @endif
                </h2>
                {{-- <p class="text-muted ml-2">Last active {{ optional($user->logins()->latest()->first()->date)->diffForHumans() }}</p> --}}
                <p class="text-muted ml-2">{{ count($user->posts) }} Artices Posted</p>
            </div>
            <div class="col-md-2">
                <img src="{{ $user->gravatar }}" alt="{{ $user->name }}" class="w-100 shadow img-thumbnail rounded-circle">
            </div>
        </div>

        @if (count($user->posts))
            <h2 class="h3 mt-5">Articles by {{ $user->name }}</h2>

            <ul class="list-unstyled">
                @foreach ($user->posts as $post)
                    <hr>
                    <li class="media">
                        <img class="mr-3" src="{{ $post->thumbnailPath }}" style="width:70px;" alt="{{ $post->title }}">
                        <div class="media-body">
                            <a href="{{ url('blog/' . $post->slug) }}"><h5 class="mt-0 mb-1">{{ $post->title }}</h5></a>
                            <p>{{ str_limit($post->body, 350) }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif

    </div>


@endsection
