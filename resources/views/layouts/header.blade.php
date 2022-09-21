<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse open" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="{{url('/')}}" class="nav-link px-2 text-white">Home</a>
        </li>
        <li class="nav-item">
          <a href="{{url('/')}}" class="nav-link px-2 text-white">Features</a>
        </li>
        <li class="nav-item">
          <a href="{{url('pricing')}}" class="nav-link px-2 text-white">Pricing</a>
        </li>
      </ul>
      <div class="d-flex">
        @if(!Auth::check())
        <a class="btn btn-outline-light me-2" href="{{url('login')}}" role="button">Sign in</a>
        <a class="btn btn-warning" href="{{url('signup')}}" role="button">Sign up</a>
        @else
        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/octocat.png" alt="octocat" class="rounded-circle" width="32" height="32">
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end text-small shadow">
            <li><a class="dropdown-item" href="{{url('account')}}">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('signout')}}">Sign out</a></li>
          </ul>
        </div>
        @endif
      </div>
    </div>
  </div>
</nav>