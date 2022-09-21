@extends('layouts.auth')

@section('style')
  @parent
  <style type="text/css">
    .form-signin input[type="email"] {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
    }

    .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
  </style>
@endsection

@section('content')
<main class="form-signin w-100 m-auto text-center">
  <form action="{{url('signup')}}" method="POST">
    @csrf
    <img class="mb-4 rounded-circle" src="https://github.com/octocat.png" alt="" width="57" height="57">
    <h1 class="h3 mb-3 fw-normal">Create new account</h1>

    @if($errors)
    <div class="error-message mb-3 text-danger">
      @foreach($errors->all() as $error)
      <p>{{$error}}</p>
      @endforeach
    </div>
    @endif

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" value="{{old('name')}}" required>
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    <p class="mt-3 lead text-muted">
    	Have an account ? <a href="{{url('login')}}">Sign in</a>.
    </p>
  </form>
</main>
@endsection