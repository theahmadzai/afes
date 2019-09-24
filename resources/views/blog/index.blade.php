@extends('layouts.app')

@section('title', 'Blog')


@section('content')

    @component('partials.head')
        Articles
    @endcomponent

    <div class="container py-3">

        <div class="row">

            <div class="col-md-8">

                <div class="container">

                    @foreach($posts as $post)

                        <div class="row mb-3 app-blog-post" onclick="window.location.href = '{{ url()->current() . '/' . $post->slug }}'">

                            <div class="col-sm-4 p-0 app-blog-post-left">
                            <img src="{{ $post->thumbnail }}"></img>
                            </div>

                            <div class="col-sm-8 p-3 app-blog-post-right">
                                <h2 class="mb-1"><a href="{{ url()->current() . '/' . $post->slug }}">{{ $post->title }}</a></h2>
                                <div class="mb-1"><strong>{{ $post->tags->pluck('name')->toUpper()->implode(', ') }}</strong></div>
                                <p>{{ str_limit($post->body, 150) }}</p>
                                <a href="{{ url('profile/' . $post->user->username) }}">
                                    <img src="{{ $post->user->gravatar }}" title="{{ $post->user->name }}" alt="{{ $post->user->name }}">
                                </a>
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

            <div class="col-md-4 pl-md-0">

                <div class="container" style="background:#ededed; height:100% py-3">

                    <form method="POST" action="{{ url()->current() }}" novalidate class="py-3">
                        @csrf
                        @recaptcha

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
                            <button type="submit" class="btn btn-primary">Subscribe for Newsletter</Button>
                        </div>
                    </form>

                </div>

            </div>

        </div>

        @component('partials.pagination')
            {{ $posts->links() }}
        @endcomponent

    </div>

@endsection
