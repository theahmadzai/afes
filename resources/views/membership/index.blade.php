@extends('layouts.app')

@section('title', 'Membership')

@section('content')

    @component('partials.head')
        Become Our Member
    @endcomponent

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="container-fluid">

        <div class="row p-4">
            <p class="text-justify"><b>Afghan Evaluation Society (AfES)</b> offer memberships to development professionals, evaluators, students, and institutions. As a Member, you will benefit from AfES relationships with targeted service and support providers relevant to our work in the field of evaluation. In addition, members are eligible for discounts in AfES services and products, including events, conferences, seminars and workshops.</p>
        </div>

        <div class="row p-0 px-4">
            <div class="col-sm-4 p-0 pr-sm-3 mb-4">
                <div class="card">
                    <img src="/img/main/sm.jpg" class="card-img-top" alt="Student Membership">
                    <div class="card-body">
                        <h5 class="card-title">Student Membership</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">One Time Fee: <b>N/A</b></li>
                        <li class="list-group-item">Annual Subscription Fee: <b>21,00 AFN</b></li>
                    </ul>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}">
                            @csrf
                            <input type="hidden" name="membership" value="student">
                            <button id="checkout-button-plan_Fd3E3WHL2lQhYl" class="subscription-button">BUY NOW</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 p-0 pl-sm-2 pr-sm-2 mb-4">
                <div class="card">
                    <img src="/img/main/pm.jpg" class="card-img-top" alt="Professional Membership">
                    <div class="card-body">
                        <h5 class="card-title">Professional Membership</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">One Time Fee: <b>N/A</b></li>
                        <li class="list-group-item">Annual Subscription Fee: <b>5,600 AFN</b></li>
                    </ul>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}">
                            @csrf
                            <input type="hidden" name="membership" value="professional">
                            <button id="checkout-button-plan_Fd3Fdc2M1zaKmG" class="subscription-button">BUY NOW</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 p-0 pl-sm-3 mb-4">
                <div class="card">
                    <img src="/img/main/im.jpg" class="card-img-top" alt="Institutional Membership">
                    <div class="card-body">
                        <h5 class="card-title">Institutional Membership</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">One Time Fee: <b>7,000</b></li>
                        <li class="list-group-item">Annual Subscription Fee: <b>17,500 AFN</b></li>
                    </ul>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}">
                            @csrf
                            <input type="hidden" name="membership" value="institutional">
                            <button class="subscription-button">BUY NOW</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
