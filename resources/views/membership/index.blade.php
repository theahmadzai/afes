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

    <div class="container">

        <div class="row p-3">

            <p class="text-justify"><b>Afghan Evaluation Society (AfES)</b> offer memberships to development professionals, evaluators, students, and institutions. As a Member, you will benefit from AfES relationships with targeted service and support providers relevant to our work in the field of evaluation. In addition, members are eligible for discounts in AfES services and products, including events, conferences, seminars and workshops.</p>

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">CATEGORY</th>
                        <th scope="col">ONE TIME ENTRANCE FEE</th>
                        <th scope="col">ANNUAL SUBSCRIPTION FEE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Institutional Membership</td>
                        <td>AFN 7,000</td>
                        <td>
                            <form method="POST" action="{{ url()->current() }}">
                                @csrf
                                <input type="hidden" name="membership" value="institutional">
                                <button class="subscription-button">AFN 17,500</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Individual Membership - Professional</td>
                        <td>N/A</td>
                        <td>
                            <form method="POST" action="{{ url()->current() }}">
                                @csrf
                                <input type="hidden" name="membership" value="professional">
                                <button id="checkout-button-plan_Fd3Fdc2M1zaKmG" class="subscription-button">AFN 5,600</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Individual Membership - Student</td>
                        <td>N/A</td>
                        <td>
                            <form method="POST" action="{{ url()->current() }}">
                                @csrf
                                <input type="hidden" name="membership" value="student">
                                <button id="checkout-button-plan_Fd3E3WHL2lQhYl" class="subscription-button">AFN 21,00</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>

@endsection
