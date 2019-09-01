@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="container">

    @component('partials.head')
        Articles
    @endcomponent

    @foreach($posts as $post)

        <div class="row rounded no-gutters overflow-hidden shadow-sm my-3">
            <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="250" height="250" src="{{ optional($post->file)->thumbnail }}"></img>
            </div>

            <div class="col p-3 d-flex flex-column position-static">
                <h2 class="mb-0">{{ $post->title }}</h2>
                <b class="d-inline-block mb-2 text-primary">
                    {{ $post->tags->pluck('name')->toUpper()->implode(', ') }}
                </b>
                <div class="mb-1 text-muted">{{ $post->published_at->diffForHumans() }}</div>
                <p class="card-text mb-auto">{{ str_limit($post->body, 200) }}</p>
                <a href="{{ url('blog/' . $post->slug) }}" class="stretched-link">Continue reading</a>
                <div>
                    <p>Posted by <b>{{ $post->user->name }}</b></p>
                    <img src="{{ $post->user->gravatar }}" width="40" height="40">
                </div>
            </div>
        </div>

    @endforeach

    {{ $posts->links() }}

</div>
@endsection
