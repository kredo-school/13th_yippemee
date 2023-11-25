<div class="container">

    <a class="navbar-brand text-white" href="{{ url('/home') }}">

        <img src="{{ asset('images/logo.png') }}" height="40px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="navbar-item">
                    <a href="{{ route('home') }}" class="nav-link text-white">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('plan.show', ['date' => date('Ymd')]) }}" class="nav-link text-white">Date</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('group_list') }}" class="nav-link text-white">Place</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('friends.friends_list') }}" class="nav-link text-white">Friends</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('social.social_home') }}" class="nav-link text-white">Social</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('restaurantlist') }}" class="nav-link text-white">Restaurant</a>
                </li>
                <li class="navbar-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bell fa-lg"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-warning h5" href="{{ route('profile_plans', Auth::user()->id) }}">You have an event!</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><button type="button" class="btn-close float-end me-3 fs-6" aria-label="Close"></button></li>
                    </ul>
                </li>
                <li class="navbar-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-user fa-2xl"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          @if (Auth::user()->role_id === 1)
                        <li><a class="dropdown-item" href="{{ route('admin.users.index') }}">Admin</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endif
                        <li><a class="dropdown-item" href="{{ route('profile.show',  Auth::user()->id) }}">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><button type="button" class="btn-close float-end me-3 fs-6" aria-label="Close"></button></li>
                    </ul>
                </li>

            @endguest
        </ul>
    </div>
</div>
