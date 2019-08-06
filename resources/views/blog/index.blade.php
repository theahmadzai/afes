@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="container my-5">

    @foreach($posts as $post)

        <div class="row border rounded no-gutters overflow-hidden shadow-sm my-3">
            <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="250" height="250" src="{{ optional($post->file)->thumbnail }}"></img>
            </div>

            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">{{ $post->tags->first()->name }}</strong>
                <h3 class="mb-0">{{ $post->title }}</h3>
                <div class="mb-1 text-muted">{{ $post->published_at->diffForHumans() }}</div>
                <p class="card-text mb-auto">{{ str_limit($post->body, 200) }}</p>
                <a href="{{ url('blog/' . $post->slug) }}" class="stretched-link">Continue reading</a>
            </div>
        </div>

    @endforeach

    {{ $posts->links() }}

</div>
@endsection
