@extends('layouts.app')

@section('title', 'Membership')

@section('content')
<div class="container my-5">

    <h1 class="display-5">Become Our Member</h1>
    <p class="lead"><b>Afghan Evaluation Society (AfES)</b> offer memberships to development professionals, evaluators, students, and institutions. As a Member, you will benefit from AfES relationships with targeted service and support providers relevant to our work in the field of evaluation. In addition, members are eligible for discounts in AfES services and products, including events, conferences, seminars and workshops.</p>

    <table class="table my-5">
        <thead>
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
                <td>$100 / AFN 7,000</td>
                <td><button class="btn btn-primary">$250 / AFN 17,500</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Individual Membership - Professional</td>
                <td>N/A</td>
                <td><button class="btn btn-primary">$80 / AFN 5600</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Individual Membership - Student</td>
                <td>N/A</td>
                <td><button class="btn btn-primary">$30 / AFN 2,100</button></td>
            </tr>
        </tbody>
    </table>

</div>
@endsection
