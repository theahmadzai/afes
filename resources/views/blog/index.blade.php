@extends('layouts.app')

@section('title', 'Blog')

@section('content')

    @component('partials.head')
        Articles
    @endcomponent

    <div class="container-fluid">

        <div class="row p-4">

            <div class="col-lg-8 p-0">

                <div class="container-fluid">

                    @foreach($posts as $post)

                        <div class="row mb-4 app-blog-post" onclick="window.location.href = '{{ url()->current() . '/' . $post->slug }}'">

                            <div class="col-sm-4 p-0">
                                <img src="{{ $post->thumbnailPath }}" class="img-fluid w-100"/>
                            </div>

                            <div class="col-sm-8 p-3 app-blog-post-right">
                                <h2 class="mb-1 font-weight-normal h4"><a href="{{ url()->current() . '/' . $post->slug }}">{{ $post->title }}</a></h2>
                                <div class="mb-1"><strong>{{ $post->tags->pluck('name')->toUpper()->implode(', ') }}</strong></div>
                                <p class="text-justify text-muted">{{ str_limit($post->body, 150) }}</p>
                                <a href="{{ url('profile/' . $post->user->id) }}">
                                    <img src="{{ $post->user->gravatar }}" title="{{ $post->user->name }}" alt="{{ $post->user->name }}">
                                </a>
                            </div>

                        </div>

                    @endforeach

                </div>

                <div class="container-fluid p-0 m-0 justify-content-center">
                    <nav aria-label="Search Navigation Pages">
                        {{ $posts->links() }}
                    </nav>
                </div>

            </div>

            <div class="col-lg-4 p-0 pl-lg-4">

                <div class="col bg-light p-3 m-0" style="border-bottom:2px solid #900;">

                    <form method="POST" action="{{ url('subscribe') }}" novalidate>
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="First Name">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address">
                        </div>

                        <div class="form-group">
                            <input type="confirm_email" name="confirm_email" class="form-control @error('confirm_email') is-invalid @enderror" value="{{ old('confirm_email') }}" placeholder="Confirm Email Address">
                        </div>

                        <div class="form-group m-0">
                            <button type="submit" class="btn btn-outline-secondary">Subscribe for more</Button>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
