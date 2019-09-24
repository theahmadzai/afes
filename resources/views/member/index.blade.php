@extends('layouts.app')

@section('title', 'Members Area')

@section('content')

    @component('partials.head')
        Welcome, {{ Auth::user()->name }}
    @endcomponent

    <div class="container py-3">

        <p>Only members accessiable content!</p>

    </div>

@endsection
