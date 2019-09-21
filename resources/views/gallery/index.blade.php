@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    @component('partials.head')
        Gallery
    @endcomponent

    <div class="container py-3">

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Show only
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ url('gallery') }}">All</a>
                @foreach($categories as $category)
                    <a class="dropdown-item" href="{{ url('gallery?category=' . $category->id) }}">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>

        <div class="gallery">

            @foreach($items->chunk(4) as $chunk)
                @foreach($chunk as $item)

                    <div class="gallery__image">
                        <img src="{{ optional($item)->thumbnail }}">
                    </div>

                @endforeach
            @endforeach

        </div>

        @component('partials.pagination')
            {{ $items->appends(request()->query())->links() }}
        @endcomponent

    </div>

@endsection
