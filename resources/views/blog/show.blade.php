@extends('layouts.app')

@section('title', 'Post')

@section('content')
<div class="container">

    <div class="row my-4">
        <div class="col-4">
            <img src="{{ optional($post)->image }}" alt="{{ $post->title }}" class="img-fluid">
        </div>

        <div class="col">
            <h1>{{ $post->title }}</h1>

            <p class="text-muted">{{ $post->published_at->toFormattedDateString() }}</p>

            <p>Tags: <b>{{ $post->tags->pluck('name')->implode(', ') }}</b></p>

            <p>Posted by, <img src="{{ $post->user->gravatar }}" width="20" height="20"> <b>{{ $post->user->name }}</b></p>
        </div>
    </div>

    <p>{{ $post->body }}</p>

</div>
@endsection
