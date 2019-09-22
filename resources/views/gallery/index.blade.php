@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    @component('partials.head')
        Gallery
    @endcomponent

    <div class="container py-3">

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

        <div class="gallery">

            @foreach($items->chunk(4) as $chunk)

                <div class="gallery__row">

                    @foreach($chunk as $item)

                        <div class="gallery__row__image">
                            <img src="{{ $item->thumbnail }}">
                        </div>

                    @endforeach

                </div>

            @endforeach

        </div>

        @component('partials.pagination')
            {{ $items->appends(request()->query())->links() }}
        @endcomponent

    </div>

@endsection
