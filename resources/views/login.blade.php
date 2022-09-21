@extends('layouts.auth')

@section('content')
<main class="form-signin w-100 m-auto text-center">
  <form>
    <img class="mb-4 rounded-circle" src="https://github.com/octocat.png" alt="" width="57" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-3 lead text-muted">
    	New member ? <a href="{{url('signup')}}">Create an account</a>.
    </p>
  </form>
</main>
@endsection