@extends('layouts.app')

@section('title', 'Home')

@section('content')

@include('partials.carousel')

<div class="container">
    <div class="my-4">
        <h1>Afghan Evaluation Society</h1>
        <p>Afghan Evaluation Society (AfES) is a non-profit and Afghan-led organization registered with the Afghan Ministry of Economy as an NGO; that aims to strengthen evaluations for Sustainable Development in Afghanistan.</p>
        <p>AfES intends to work with the government, civil society and development agencies to strengthen evaluations and promote the Sustainable Development agenda in Afghanistan. Evaluation is being increasingly important due to the fact that it needs to support the new Sustainable Development Goals (SDGs).</p>
        <p>AfES is established by a number of professionals in the field of Evaluation whose primary objective is to promote the theory, practice and use of evaluation. And, to strengthen individual and institutional capacities for Evaluation to support evidence-based policy making and improved programming in Afghanistan.</p>
    </div>

    <div class="row">
        <div class="col-lg-4 p-3">
            <h2 class="display-5 font-weight-bold">Vision</h2>
            <p class="lead">Strengthened Evaluations for Sustainable Development in Afghanistan</p>
        </div>
        <div class="col-lg-4 p-3">
            <h2 class="display-5 font-weight-bold">Mission</h2>
            <p class="lead">To establish a leading platform for evaluation through capacity building, advocacy and networking, in order to support evidence-based decision making for sustainable development in Afghanistan.</p>
        </div>
        <div class="col-lg-4 p-3">
            <h2 class="display-5 font-weight-bold">Values</h2>
            <ul class="list-unstyled lead">
                <li>Integrity</li>
                <li>Equity</li>
                <li>Commitment</li>
                <li>Quality</li>
            </ul>
        </div>
    </div>
</div>

@endsection
