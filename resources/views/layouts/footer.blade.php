<div class="container text-white">
  <div class="row">
      <div class="col-3">
        <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" height="40px" class="mt-1 ms-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>

    <div class="col-7">
       <ul class="footer-nav mt-3">

    @guest
        @if (Route::has('login'))
        @endif

        @if (Route::has('register'))
        @endif
    @else

        <li class="footer-nav-item">
            <a href="#" class="nav-link">Home</a>
        </li>
        <li class="footer-nav-item">
            <a href="#" class="nav-link">Date</a>
        </li>
        <li class="footer-nav-item">
            <a href="#" class="nav-link">Place</a>
        </li>
        <li class="footer-nav-item">
            <a href="#" class="nav-link">User</a>
        </li>
        <li class="footer-nav-item">
            <a href="#" class="nav-link">Social</a>
        </li>
        <li class="footer-nav-item">
            <a href="#" class="nav-link">Restaurant</a>
        </li>
        <li class="footer-nav-item">
            <a href="#" class="nav-link">Contact</a>
        </li>

    @endguest

    </ul>
    </div>

    <div class="col text-center mt-3">
        <a href="#"><i class="fa-brands fa-instagram fa-2x me-4 text-white"></i></a>
        <a href="#"><i class="fa-brands fa-facebook fa-2x me-4 text-white"></i></a>
        <a href="#"><i class="fa-brands fa-x-twitter fa-2x text-white"></i></a>
    </div>

  </div>
</div>

<div style="background-color: #253C5C">
  <div class="container text-white text-center">
        <p class="copywrite">@ copywrite kredo</p>
  </div>
</div>
