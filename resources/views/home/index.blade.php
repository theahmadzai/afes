@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('partials.carousel')

    @component('partials.head')
        Afghan Evaluation Society
    @endcomponent

    <div class="container">

        <div class="row p-3">
            <p>Afghan Evaluation Society (AfES) is a non-profit and Afghan-led organization registered with the Afghan Ministry of Economy as an NGO; that aims to strengthen evaluations for Sustainable Development in Afghanistan.</p>
            <p>AfES intends to work with the government, civil society and development agencies to strengthen evaluations and promote the Sustainable Development agenda in Afghanistan. Evaluation is being increasingly important due to the fact that it needs to support the new Sustainable Development Goals (SDGs).</p>
            <p>AfES is established by a number of professionals in the field of Evaluation whose primary objective is to promote the theory, practice and use of evaluation. And, to strengthen individual and institutional capacities for Evaluation to support evidence-based policy making and improved programming in Afghanistan.</p>
        </div>

        <div class="row p-3 bg-light shadow-sm">
            <div class="col-md-4 p-3 bg-white">
                <h2 class="font-weight-light text-center mb-2 pb-2" style="border-bottom:4px solid rgb(64, 64, 64);">Vision</h2>
                <p class="text-center text-muted">Strengthened Evaluations for Sustainable Development in Afghanistan</p>
            </div>

            <div class="col-md-4 p-3">
                <h2 class="font-weight-light text-center mb-2 pb-2" style="border-bottom:4px solid rgb(153, 0, 0);">Mission</h2>
                <p class="text-center text-muted">To establish a leading platform for evaluation through capacity building, advocacy and networking, in order to support evidence-based decision making for sustainable development in Afghanistan.</p>
            </div>

            <div class="col-md-4 p-3 bg-white">
                <h2 class="font-weight-light text-center mb-2 pb-2" style="border-bottom:4px solid rgb(0, 102, 0);">Values</h2>
                <ul class="list-unstyled text-center text-muted">
                    <li>Integrity</li>
                    <li>Equity</li>
                    <li>Quality</li>
                    <li>Commitment</li>
                </ul>
            </div>
        </div>

        <div class="row justify-content-center py-5">
            <a href="{{ url('subscribe') }}" class="btn btn-lg btn-danger shadow-lg">Subscribe to Updates</a>
        </div>

    </div>

@endsection
