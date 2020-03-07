@extends('layouts.app')

@section('title', 'Verify Email')

@section('content')

    @component('partials.head')
        Verify Your Email Address
    @endcomponent

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8">

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">A fresh verification link has been sent to your email address.</div>
                @endif

                Before proceeding, please check your email for a verification link.
                If you did not receive the email, <a href="{{ route('verification.resend') }}">click here to request another</a>.

            </div>

        </div>

    </div>

@endsection
