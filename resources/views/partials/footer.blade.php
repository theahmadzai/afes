<footer class="container-fluid app-footer">

    <div class="row px-3 py-4">

        <div class="col-md-3 border-bottom-md-3 mb-md-3">
            <h6 class="mb-3 text-white text-uppercase border-bottom pb-1">Latest Publications</h6>
            <ul class="list-unstyled">
                @foreach ($footer_posts as $post)
                    <li class="media mb-2 p-2" style="background: #444;">
                        <img class="mr-2 w-25" src="{{ $post->thumbnailPath }}" alt="{{ $post->title }}">
                        <div class="media-body">
                            <h6>
                                <a class="mt-0 mb-1 text-uppercase" style="font-size:12px;" href="/blog/{{$post->slug}}">{{ $post->title }}</a>
                            </h6>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-3">
            <h6 class="mb-3 text-white text-uppercase border-bottom pb-1">Jobs & Tenders</h6>
            <ul class="list-unstyled">
                @foreach ($footer_jobs as $job)
                    <li class="mb-2"><a href="/jobs/{{$job->id}}">{{ $job->title }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-3">
            <h6 class="mb-3 text-white text-uppercase border-bottom pb-1">Contact Details</h6>
            <p>House# 236, Behind District 4 Municipality Office 5 th Street, 40-Meter Road, Kulola Pushta Kabul, Afghanistan 1001</p>
            <p>
                <b>Phone: </b>+93 771 251 253 <br>
                <a href="contact@afghanevaluation.af">contact@afghanevaluation.af</a><br>
                <a href="webmster@afghanevaluation.af">webmaster@afghanevaluation.af</a>
            </p>
        </div>

        <div class="col-md-3">
            <h6 class="mb-3 text-white text-uppercase border-bottom pb-1">Subscribe</h6>
            <form method="POST" action="{{ url('subscribe') }}" novalidate>
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="first_name" style="height:25px; font-size:14px;" class="rounded-0 border-0 form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="First Name">
                    </div>

                    <div class="form-group col-md-6">
                        <input type="text" name="last_name" style="height:25px; font-size:14px;" class="rounded-0 border-0 form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-group">
                    <input type="email" name="email" style="height:25px; font-size:14px;" class="rounded-0 border-0 form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address">
                </div>

                <div class="form-group">
                    <input type="email" name="confirm_email" style="height:25px; font-size:14px;" class="rounded-0 border-0 form-control @error('confirm_email') is-invalid @enderror" value="{{ old('confirm_email') }}" placeholder="Confirm Email Address">
                </div>

                <div class="form-group m-0">
                    <button type="submit" style=" font-size:14px;" class="rounded-0 btn btn-secondary">Subscribe for more</Button>
                </div>
            </form>
        </div>

    </div>

    <div class="row p-4" style="background:#424242;">
        <div style="color:#888;">&copy; <span class="text-white">Copyright</span> 2020 by <span class="text-white">Afghan Evaluation Society</span>. All Rights Reserved.</div>
    </div>

</footer>
