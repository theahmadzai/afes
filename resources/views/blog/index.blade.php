@extends('layouts.app')

@section('title', 'Blog')


@section('content')

    @component('partials.head')
        Articles
    @endcomponent

    <div class="container py-3">

        {{-- @foreach($posts->chunk(3) as $chunk)

            <div class="row">

                @foreach($chunk as $post)

                    <div class="col-4 my-3">

                        <img class="img-fluid" src="{{ optional($post->file)->thumbnail }}" alt="{{ $post->title }}">

                    </div>

                @endforeach

            </div>

        @endforeach --}}

        @foreach($posts as $post)

            <div class="row rounded no-gutters overflow-hidden shadow-sm my-3 app-post">
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="250" height="250" src="{{ optional($post)->thumbnail }}"></img>
                </div>

                <div class="col p-3">
                    <h2 class="text-uppercase">
                        {{ $post->title }}
                    </h2>
                    <p class="text-primary">
                        {{ $post->tags->pluck('name')->toUpper()->implode(', ') }}
                    </p>
                    <div class="text-muted">
                        {{ $post->published_at->diffForHumans() }}
                    </div>
                    <p class="card-text mb-auto">{{ str_limit($post->body, 200) }}</p>
                    <a href="{{ url('blog/' . $post->slug) }}" class="stretched-link">Continue reading</a>
                    <div>
                        <p>Posted by <b>{{ $post->user->name }}</b></p>
                        <img src="{{ $post->user->gravatar }}" width="40" height="40">
                    </div>
                </div>
            </div>

        @endforeach

        <div class="row justify-content-center align-items-center mt-3">
            {{ $posts->links() }}
        </div>

    </div>

@endsection
