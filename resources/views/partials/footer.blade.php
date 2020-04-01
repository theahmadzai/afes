<footer class="container-fluid app-footer">

    <div class="row p-4">

        <div class="col-md-3 px-0 border-bottom-md-3 mb-md-3">
            <h6 class="mb-3 text-white">Recent Opportunity Posting</h6>
            <ul>
                @foreach ($footer_jobs as $job)
                    <li><a href="/jobs/{{$job->id}}">{{ $job->title }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-3 px-0">
            <h6 class="mb-3 text-white">Latest Publications</h6>
            <ul>
                @foreach ($footer_posts as $post)
                    <li><a href="/blog/{{$post->slug}}">{{ $post->title }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-3 px-0">
            <h6 class="mb-3 text-white">Contact Details</h6>
            <p>House# 236, Behind District 4 Municipality Office 5 th Street, 40-Meter Road, Kulola Pushta Kabul, Afghanistan 1001</p>
            <p>
                <b>Phone: </b>+93 771 251 253 <br>
                <a href="contact@afghanevaluation.af">contact@afghanevaluation.af</a><br>
                <a href="webmster@afghanevaluation.af">webmaster@afghanevaluation.af</a>
            </p>
        </div>

        <div class="col-md-3 px-0">
            <h6 class="mb-3 text-white">Subscribe</h6>
            <form method="POST" action="{{ url('subscribe') }}" novalidate>
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="First Name">
                    </div>

                    <div class="form-group col-md-6">
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address">
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address">
                </div>

                <div class="form-group m-0">
                    <button type="submit" class="btn btn-outline-secondary">Subscribe for more</Button>
                </div>
            </form>
        </div>

    </div>

    <div class="row p-4" style="background:#424242;">
        <div style="color:#888;">&copy; <span class="text-white">Copyright</span> 2020 by <span class="text-white">Afghan Evaluation Society</span>. All Rights Reserved.</div>
    </div>

</footer>
