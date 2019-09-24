@extends('layouts.profile')

@section('title', 'Billing')

@section('profile-content')

    <div class="card">

        <div class="card-header">Billing</div>

        <div class="card-body">

            @if(Auth::user()->hasPaymentMethod())
                <div class="form-group row">
                    <div class="col-md-8 offset-md-4 d-flex align-items-center">
                        <i class="fa fa-cc-stripe fa-3x mr-md-3"></i>
                        <p class="mb-0"><b>{{ Auth::user()->card_brand }}</b> - {{ Auth::user()->card_last_four }}</p>
                    </div>
                </div>
            @endif

            <div class="form-group row">
                <label for="card-holder-name" class="col-form-label col-md-4">Full Name</label>
                <div class="col-md-8">
                    <input type="text" id="card-holder-name" placeholder="Your Full Name" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-8 offset-md-4">
                    <div id="card-element"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary" id="card-button" data-secret="{{ Auth::user()->createSetupIntent()->client_secret }}">Update Billing Info</Button>
                </div>
            </div>

        </div>

    </div>

@endsection

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
@endpush
