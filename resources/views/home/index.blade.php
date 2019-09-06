@extends('layouts.app')

@section('title', 'Home')

@section('content')

@include('partials.carousel')

@component('partials.head')
    Afghan Evaluation Society
@endcomponent

<div class="container">

    <div class="my-4">
        <p>Afghan Evaluation Society (AfES) is a non-profit and Afghan-led organization registered with the Afghan Ministry of Economy as an NGO; that aims to strengthen evaluations for Sustainable Development in Afghanistan.</p>
        <p>AfES intends to work with the government, civil society and development agencies to strengthen evaluations and promote the Sustainable Development agenda in Afghanistan. Evaluation is being increasingly important due to the fact that it needs to support the new Sustainable Development Goals (SDGs).</p>
        <p>AfES is established by a number of professionals in the field of Evaluation whose primary objective is to promote the theory, practice and use of evaluation. And, to strengthen individual and institutional capacities for Evaluation to support evidence-based policy making and improved programming in Afghanistan.</p>
    </div>

    <div class="row p-3 text-center app-aim">

        <div class="col-md-4 p-3">
            <h2 class="font-weight-bold mb-2">Vision</h2>
            <p>Strengthened Evaluations for Sustainable Development in Afghanistan</p>
        </div>

        <div class="col-md-4 p-3">
            <h2 class="font-weight-bold mb-2">Mission</h2>
            <p>To establish a leading platform for evaluation through capacity building, advocacy and networking, in order to support evidence-based decision making for sustainable development in Afghanistan.</p>
        </div>

        <div class="col-md-4 p-3">
            <h2 class="font-weight-bold mb-2">Values</h2>
            <ul class="list-unstyled">
                <li>Integrity</li>
                <li>Equity</li>
                <li>Commitment</li>
                <li>Quality</li>
            </ul>
        </div>

    </div>

</div>

@endsection
