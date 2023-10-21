<nav class="footer-link navbar navbar-expand-md shadow-sm">
    <div class="container">

        <a class="navbar-brand text-white" href="{{ url('/home') }}">

            <img src="{{ asset('images/logo.png') }}" height="40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#footer" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="footer">

            <ul class="navbar-nav mx-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                    @endif

                    @if (Route::has('register'))
                    @endif
                @else
                    <li class="navbar-item footer-item">
                        <a href="{{ route('home') }}" class="nav-link text-white">Home</a>
                    </li>
                    <li class="navbar-item footer-item">
                        <a href="{{ route('calendar') }}" class="nav-link text-white">Date</a>
                    </li>
                    <li class="navbar-item footer-item">
                        <a href="{{ route('group_list') }}" class="nav-link text-white">Place</a>
                    </li>
                    <li class="navbar-item footer-item">
                        <a href="{{ route('friends.friends_list') }}" class="nav-link text-white">Friends</a>
                    </li>
                    <li class="navbar-item footer-item">
                        <a href="{{ route('social.social_home') }}" class="nav-link text-white">Social</a>
                    </li>
                    <li class="navbar-item footer-item">
                        <a href="{{ route('restaurantlist') }}" class="nav-link text-white">Restaurant</a>
                    </li>
                    <li class="navbar-item footer-item">
                        <a href="{{ route('contact') }}" class="nav-link text-white">Contact</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link"><i class="fa-brands fa-instagram fa-2x mx-2 text-white"></i></a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link"><i class="fa-brands fa-facebook fa-2x mx-2 text-white"></i></a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link"><i class="fa-brands fa-x-twitter fa-2x mx-2 text-white"></i></a>
                    </li>
            </ul>
            @endguest
        </div>
    </div>

</nav>

<nav class="copyright navbar navbar-expand-md shadow-sm">
    <div class="container">
        <p class="text-white m-auto">@ copyright kredo</p>
    </div>
</nav>
