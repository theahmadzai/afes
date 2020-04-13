@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('partials.carousel')

    <header class="header-strip">
        <h1>Afghan Evaluation Society</h1>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon fill="white" points="0,100 100,0 100,100"/>
        </svg>
    </header>

    <div class="container-fluid">

        <div class="row p-4 lead text-justify" data-aos="zoom-in-up">
            <p>Afghan Evaluation Society (AfES) is a non-profit and Afghan-led organization registered with the Afghan Ministry of Economy as an NGO; that aims to strengthen evaluations for Sustainable Development in Afghanistan.</p>
            <p>AfES intends to work with the government, civil society and development agencies to strengthen evaluations and promote the Sustainable Development agenda in Afghanistan. Evaluation is being increasingly important due to the fact that it needs to support the new Sustainable Development Goals (SDGs).</p>
            <p>AfES is established by a number of professionals in the field of Evaluation whose primary objective is to promote the theory, practice and use of evaluation. And, to strengthen individual and institutional capacities for Evaluation to support evidence-based policy making and improved programming in Afghanistan.</p>
        </div>

        <div class="row p-3 p-md-5 mb-2 text-center bg-light shadow-sm" data-aos="fade-right">
            <div class="col-md-4 p-lg-4 mx-auto" style="border-right: 1px solid #eee;">
                <img src="/img/vision.png" class="w-75" alt="Vision" data-aos="zoom-out-left">
            </div>
            <div class="col-md-4 p-lg-4 mx-auto">
                <h1 class="display-4 font-weight-normal mb-2" style="border-bottom: 4px solid rgb(64, 64, 64);">Vision</h1>
                <p class="lead font-weight-normal">Strengthened Evaluations for Sustainable Development in Afghanistan</p>
            </div>
        </div>

        <div class="row p-3 p-md-5 my-2 text-center bg-light shadow-sm" data-aos="fade-left">
            <div class="col-md-4 p-lg-4 mx-auto" style="border-right: 1px solid #eee;">
                <img src="/img/mission.png" class="w-75" alt="Mission" data-aos="zoom-in-right">
            </div>
            <div class="col-md-4 p-lg-4 mx-auto">
                <h1 class="display-4 font-weight-normal mb-2" style="border-bottom: 4px solid rgb(153, 0, 0);">Mission</h1>
                <p class="lead font-weight-normal">To establish a leading platform for evaluation through capacity building, advocacy and networking, in order to support evidence-based decision making for sustainable development in Afghanistan.</p>
            </div>
        </div>

        <div class="row p-3 p-md-5 my-2 text-center bg-light shadow-sm" data-aos="fade-right">
            <div class="col-md-4 p-lg-4 mx-auto" style="border-right: 1px solid #eee;">
                <img src="/img/values.png" class="w-75" alt="Values" data-aos="zoom-in-left">
            </div>
            <div class="col-md-4 p-lg-4 mx-auto">
                <h1 class="display-4 font-weight-normal mb-2" style="border-bottom: 4px solid rgb(0, 102, 0);">Values</h1>
                <ul class="list-unstyled text-center lead">
                    <li>Integrity</li>
                    <li>Equity</li>
                    <li>Quality</li>
                    <li>Commitment</li>
                </ul>
            </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                @foreach ($footer_posts as $post)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <div class="media mb-2 p-2">
                        <img class="mr-2" src="{{ $post->thumbnailPath }}" alt="{{ $post->title }}" style="width:150px; height: 150px;">
                        <div class="media-body">
                            <h6>
                                <a class="mt-0 mb-1 text-uppercase" href="/blog/{{$post->slug}}">{{ $post->title }}</a>
                            </h6>
                            <p class="lead">{{ str_limit($post->body, 250) }}</p>
                        </div>
                    </div>
                </div>
                    {{-- <div class="carousel-item @if ($loop->first) active @endif">
                        <img src=" {{ $post->image }}" class="d-block w-100 h-25" alt="{{ $post->title }}">
                        <div class="carousel-caption d-none d-md-block" style="opacity:0.2; background:#000;">
                            <h5>{{ $post->title }}</h5>
                            <p>{{ str_limit($post->body, 40) }}</p>
                        </div>
                    </div> --}}
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row p-3 p-md-5 mb-2 text-center bg-dark shadow-sm" data-aos="flip-up">
            <div class="col-md-8 p-lg-4 mx-auto">
                <h2 class="display-4 font-weight-normal mb-2 text-white">Membership</h2>
                <p class="lead font-weight-normal text-light">Afghan Evaluation Society (AfES) offer memberships to development professionals, evaluators, students, and institutions. As a Member, you will benefit from AfES relationships with targeted service and support providers relevant to our work in the field of evaluation.</p>
                <a href="/membership" type="button" class="btn-lg btn-light">BUY NOW</a>
            </div>
        </div>

        <div class="row p-4 bg-light shadow-sm">
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

        <h2 class="display-4 text-center font-weight-normal my-5 text-dark">Board of Directors</h2>

        <div class="row px-3">
            <div class="col-lg-4 text-center">
                <div class="mx-1 p-4 shadow" data-aos="fade-up">
                    <img src="/img/bod/Samandar-Mahmodi.jpg" class="img mb-2 shadow img-thumbnail" width="100" height="100">
                    <h3 class="m-2 border-bottom pb-2">Samandar Mahmodi</h3>
                    <p><b>Mr. Samandar Mahmodi</b> has over ten (10) years of professional experience in social research, surveys, monitoring and evaluation, qualitative and quantitative data collection and analysis; designing, developing and managing M&E systems. Mr Mahmodi has worked with a broad range of programs and projects in...</p>
                    <a class="btn btn-dark" href="#" role="button">Read more &raquo;</a>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="mx-1 p-4 shadow-lg" data-aos="fade-down">
                    <img src="/img/bod/Qudratullah-Jahid.jpg" class="img mb-2  shadow rounded-circle" width="130" height="130">
                    <h3 class="m-2 border-bottom pb-2">Qudratullah Jahid</h3>
                    <p><b>Mr. Qudratullah Jahid</b> is the Secretary General and founding board member of Afghan Evaluation Society (AfES). Mr Jahid is an M&E professional and sustainable development enthusiast. He has a bachelor’s degree and four international certificates in management and M&E and has more than nine years of work experience...</p>
                    <a class="btn btn-dark" href="#" role="button">Read more &raquo;</a>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="mx-1 p-4 shadow" data-aos="fade-up">
                    <img src="/img/bod/Mansoor-Yosufzai.jpg" class="img mb-2 shadow rounded-circle" width="100" height="100">
                    <h3 class="m-2 border-bottom pb-2">Mansoor Yosufzai</h3>
                    <p><b>Mr. Mansoor Yosufzai</b> has a bachelor’s degree in Business Administration with over five years of experience in the fields of Monitoring and Evaluation, Research, Project Management and Reporting with various international organizations in Afghanistan and Sweden. Mr. Yosufzai is a board...</p>
                    <a class="btn btn-dark" href="#" role="button">Read more &raquo;</a>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img src="/img/main/2.jpg" class="featurette-image img-fluid mx-aut" width="100%" height="100%" alt="">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row pt-4 px-4">
            <div class="col-md-6 p-0">
                <img src="/img/main/1.jpg" width="100%" height="100%" alt="">
            </div>
            <div class="col-md-6 p-3 text-justify bg-light text-dark">
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est qui et inventore nisi quo unde, iste nemo laboriosam, assumenda laudantium quia itaque placeat sunt aspernatur. Officia inventore laudantium amet temporibus.</p>
            </div>
        </div>

        <div class="row px-4">
            <div class="col-md-6 p-3 text-justify bg-light text-dark">
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est qui et inventore nisi quo unde, iste nemo laboriosam, assumenda laudantium quia itaque placeat sunt aspernatur. Officia inventore laudantium amet temporibus.</p>
            </div>
            <div class="col-md-6 p-0">
                <img src="/img/main/2.jpg" width="100%" height="100%" alt="">
            </div>
        </div>

        <div class="row px-4">
            <div class="col-md-6 p-0">
                <img src="/img/main/3.jpg" width="100%" height="100%" alt="">
            </div>
            <div class="col-md-6 p-3 text-justify bg-light text-dark">
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est qui et inventore nisi quo unde, iste nemo laboriosam, assumenda laudantium quia itaque placeat sunt aspernatur. Officia inventore laudantium amet temporibus.</p>
            </div>
        </div>

        <div class="row justify-content-center py-5">
            <a href="{{ url('subscribe') }}" class="btn btn-lg btn-danger shadow-lg">Subscribe to Updates</a>
        </div>

    </div>

@endsection
