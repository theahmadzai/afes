@extends('layouts.app')

@section('title', 'Post')

@section('content')
<div class="container my-5">

    <div class="row mb-4">
        <div class="col-3">
            <img src="{{ $post->file->getImage() }}" alt="{{ $post->title }}" class="img-fluid">
        </div>

        <div class="col">
            <h3>{{ $post->title }}</h3>

            <p class="text-muted">{{ $post->published_at->toFormattedDateString() }}</p>

            <p>Tags: <b>{{ $post->tags->implode('name', ', ') }}</b></p>
        </div>
    </div>

    <p class="lead">{{ $post->body }}</p>

    <b>Posted by, {{ $post->user->name }}</b>

</div>
@endsection
