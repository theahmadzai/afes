@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    @component('partials.head')
        Gallery
    @endcomponent

    <div class="container-fluid">

        <div class="row p-0 px-4 pb-2 pt-4">

            <div class="col-4 p-0">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Show only
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ url('gallery') }}">All</a>
                        @foreach($categories as $category)
                            <a class="dropdown-item" href="{{ url('gallery?category=' . $category->id) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-8 col-sm-4 p-0 justify-content-center">
                <nav aria-label="Search Navigation Pages">
                    {{ $images->appends(request()->query())->links() }}
                </nav>
            </div>

        </div>

        <div class="row p-0 px-3">
            @foreach($images as $image)
                <div class="col-sm-6 col-md-4 col-lg-3 p-0 px-2 pb-3">
                    <img src="{{ $image->thumbnailPath }}" alt="{{ $image->caption }}" class="img-thumbnail rounded w-100">
                </div>
            @endforeach
        </div>

    </div>

@endsection
