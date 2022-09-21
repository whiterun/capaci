<header class="p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{url('/')}}" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="{{url('/')}}" class="nav-link px-2 text-white">Features</a></li>
        <li><a href="{{url('pricing')}}" class="nav-link px-2 text-white">Pricing</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
      </form>

      <div class="text-end">
        @if(!Auth::check())
        <a class="btn btn-outline-light me-2" href="{{url('login')}}" role="button">Sign in</a>
        <a class="btn btn-warning" href="#signup-modal" role="button">Sign up</a>
        @else
        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/octocat.png" alt="octocat" class="rounded-circle" width="32" height="32">
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end text-small shadow" style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate(0px, -33.5px);" data-popper-placement="top-end">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('signout')}}">Sign out</a></li>
          </ul>
        </div>
        @endif
      </div>
    </div>
  </div>
  @if(!Auth::check())
    @include('layouts.auth-modal')
  @endif
</header>