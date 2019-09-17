@extends('layouts.app')

@section('title', 'Membership')

@section('content')

    @component('partials.head')
        Become Our Member
    @endcomponent

    <div class="container py-3">

        <p><b>Afghan Evaluation Society (AfES)</b> offer memberships to development professionals, evaluators, students, and institutions. As a Member, you will benefit from AfES relationships with targeted service and support providers relevant to our work in the field of evaluation. In addition, members are eligible for discounts in AfES services and products, including events, conferences, seminars and workshops.</p>

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
                        <button
                            style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
                            id="nil"
                            role="link">AFN 17,500
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Individual Membership - Professional</td>
                    <td>N/A</td>
                    <td>
                        <button
                            style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
                            id="checkout-button-plan_Fd3Fdc2M1zaKmG"
                            role="link">AFN 5,600
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Individual Membership - Student</td>
                    <td>N/A</td>
                    <td>
                        <button
                            style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
                            id="checkout-button-plan_Fd3E3WHL2lQhYl"
                            role="link">AFN 21,00
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div id="error-message"></div>
    </div>

@endsection

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
@endpush
