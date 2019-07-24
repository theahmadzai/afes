@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="container my-5">


    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Show only
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($categories as $category)
                <a class="dropdown-item" href="#">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>

    @foreach($items->chunk(4) as $chunk)
        <div class="row">
            @foreach($chunk as $item)
                <div class="col">
                    <img src="{{ asset('storage/'.$item->image->filename) }}" class="img-fluid my-3">
                </div>
            @endforeach
        </div>
    @endforeach

</div>
@endsection
