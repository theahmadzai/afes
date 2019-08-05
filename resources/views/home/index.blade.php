@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 courosel-img-fix" src="/img/s1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Heading One</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab commodi.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 courosel-img-fix" src="/img/s2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Heading Two</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab commodi.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 courosel-img-fix" src="/img/s3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Heading Three</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab commodi.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="my-4">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">Afghan Evaluation Society (AfES) is a non-profit and Afghan-led organization registered with the Afghan Ministry of Economy as an NGO; that aims to strengthen evaluations for Sustainable Development in Afghanistan.</p>
        <p class="lead">AfES intends to work with the government, civil society and development agencies to strengthen evaluations and promote the Sustainable Development agenda in Afghanistan. Evaluation is being increasingly important due to the fact that it needs to support the new Sustainable Development Goals (SDGs).</p>
        <p class="lead">AfES is established by a number of professionals in the field of Evaluation whose primary objective is to promote the theory, practice and use of evaluation. And, to strengthen individual and institutional capacities for Evaluation to support evidence-based policy making and improved programming in Afghanistan.</p>
    </div>

    <div class="row my-5">
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
