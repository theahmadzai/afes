<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
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
                        <a class="dropdown-item" href="{{ url('profile/settings') }}">
                            <img src="{{ Auth::user()->gravatar }}" alt="" style="width:20px;height:20px;" class="rounded-circle shadow mr-1">
                            {{ __('Profile') }}
                        </a>

                        <a class="dropdown-item" href="{{ url('members') }}">
                            <i class="fa fa-key mr-1"></i>
                            {{ __('Members Area') }}
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out mr-1"></i>
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
