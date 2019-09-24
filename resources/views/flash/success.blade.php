@extends('layouts.app')

@section('title', $header)

@section('content')
<div class="container my-5">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $head }}</div>

                <div class="card-body">
                    {{ $body }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
