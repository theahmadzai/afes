@extends('layouts.profile')

@section('title', 'Billing')

@section('profile-content')

    <div class="card">

        <div class="card-header">Billing</div>

        <div class="card-body">

            @if(Auth::user()->hasPaymentMethod())
                <div class="form-group row">
                    <div class="col d-flex align-items-center">
                        <i class="fa fa-cc-stripe fa-3x"></i>
                        <div class="ml-md-3">
                            <p class="mb-0"><b>**** **** **** {{ Auth::user()->card_last_four }}</b></p>
                            <p class="mb-0"><b><i>{{ Auth::user()->card_brand }}</i></b></p>
                        </div>
                    </div>
                </div>
            @endif

            <form id="payment-form" method="POST" action="{{ url()->current() }}" novalidate>
                @csrf

                <input type="hidden" id="payment-name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="payment_method" id="payment-method">

                <div class="form-group row">
                    <div class="col">
                        <div id="card-element" class="mb-2"></div>
                        <div id="card-errors" class="text-danger"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary" id="card-button" data-secret="{{ Auth::user()->createSetupIntent()->client_secret }}">Update Billing Info</Button>
                    </div>
                </div>

            </form>

        </div>

    </div>

@endsection

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
@endpush
