@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    @component('partials.head')
        Gallery
    @endcomponent

    <div class="container-fluid">

        <div class="row p-0 px-4 pt-4">
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

        <div class="row p-0 px-4 pt-4">

            {{-- <div class="gallery"> --}}

                @foreach($items->chunk(3) as $chunk)

                        @foreach($chunk as $item)
                            <div class="col-sm-4 pb-4">

                            {{-- <div class="gallery__row__image"> --}}
                                <img src="{{ $item->thumbnail }}" width="100%" height="100%" class="border">
                            {{-- </div> --}}
                            </div>

                        @endforeach

                @endforeach

        </div>

        <nav class="row pb-2 justify-content-center" aria-label="Search Navigation Pages">
            {{ $items->appends(request()->query())->links() }}
        </nav>

    </div>

@endsection
