<header id="header" class="bg-white shadow-sm sticky">

    <div id="topbar" class="row px-4" style="overflow:hidden; transition: height 0.2s ease-out">
        <div class="col-8 align-self-center">
            <a id="logo" class="navbar-brand my-2" href="{{ url('/') }}">
                <img src="/img/logo.jpg" alt="{{ config('app.name', 'Laravel') }} Logo" height="64">
            </a>
        </div>

        <div class="col-4 align-self-center d-flex justify-content-end">
            <a href="#"><i class="fab fa-facebook-f fa-2x mr-2" style="color:#3b5998"></i></a>
            <a href="#"><i class="fab fa-twitter fa-2x ml-2 mr-2" style="color:#00aced"></i></a>
            <a href="#"><i class="fab fa-google-plus-g fa-2x ml-2 mr-2" style="color:#dd4b39"></i></a>
            <a href="#"><i class="fab fa-pinterest-p fa-2x ml-2 mr-2" style="color:#cb2027"></i></a>
        </div>
    </div>

    <nav id="navbar" class="row navbar navbar-expand-md navbar-light p-0 m-0 px-4" style="border-top: 1px solid #efefef;">
        <a id="logo-sm" class="navbar-brand" href="{{ url('/') }}" style="display:none">
            <img src="/img/logo-sm.jpg" alt="{{ config('app.name', 'Laravel') }} Logo" width="32" height="32">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav p-0 m-0 mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ url('/about') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/about/chairman-message') }}">Chairman's Message</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/about/organizational-strategy') }}">Organizational Strategy</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/about/board-of-directors') }}">Board Of Directors</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/about/statutes-and-by-laws') }}">Statutes And By-Laws</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/membership') }}">Membership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/jobs') }}">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/donate') }}">Donate</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ Auth::user()->gravatar }}" alt="" style="width:20px;height:20px;" class="rounded-circle shadow mr-1">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('profile/' . Auth::user()->id ) }}">
                                <img src="{{ Auth::user()->gravatar }}" alt="" style="width:18px;height:18px;" class="rounded-circle shadow mr-2">
                                {{ __('Profile') }}
                            </a>

                            <a class="dropdown-item" href="{{ url('members') }}">
                                <i class="fa fa-key mr-2"></i>
                                {{ __('Members Area') }}
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ url('profile/settings/subscriptions') }}">
                                <i class="fa fa-heart mr-2"></i>
                                {{ __('Subscriptions') }}
                            </a>

                            <a class="dropdown-item" href="{{ url('profile/settings/general') }}">
                                <i class="fa fa-cog mr-2"></i>
                                {{ __('Settings') }}
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-reply mr-2"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

</header>
