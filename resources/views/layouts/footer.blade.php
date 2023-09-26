<div class="container text-white">
  <div class="row">
      <div class="col-3">
        <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" height="50px" class="mt-3 ms-3">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>

    <div class="col-7">
       <ul class="footer-nav mt-4">

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

    <div class="col"></div>

    <div class="text-center">
        <a href="#"><i class="fa-brands fa-instagram fa-3x me-5 text-white"></i></a>
        <a href="#"><i class="fa-brands fa-facebook fa-3x me-5 text-white"></i></a>
        <a href="#"><i class="fa-brands fa-x-twitter fa-3x text-white"></i></a>
    </div>

  </div>
</div>

<div style="background-color: #253C5C">
  <div class="container text-white">
    <div class="text-center">
        <p>@ copywrite kredo</p>
    </div>
  </div>
</div>
