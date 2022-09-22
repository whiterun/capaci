@extends('layouts.app')

@section('content')
  <div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm">
    <img class="me-3 rounded-circle" src="https://github.com/octocat.png" alt="" width="48" height="48">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-dark lh-1">Your Account Detail</h1>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col-lg-4">
          <h6 class="border-bottom pb-2 mb-3 text-center">Basic Detail</h6>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Name" value="{{$user->name}}">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="name@example.com" value="{{$user->email}}">
          </div>
          <div class="d-grid mb-3">
            <button class="btn btn-primary" type="submit">Update</button>
          </div>
        </div>
        <div class="col-lg-4">
          <h6 class="border-bottom pb-2 mb-3 text-center">Password</h6>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Current Password</label>
            <input type="password" class="form-control" placeholder="Current Password">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">New Password</label>
            <input type="password" class="form-control" placeholder="New Password">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" placeholder="Confirm New Password">
          </div>
          <div class="d-grid mb-3">
            <button class="btn btn-primary" type="submit">Update</button>
          </div>
        </div>
        <div class="col-lg-4">
          <h6 class="border-bottom pb-2 mb-3 text-center">Subscription</h6>
          <div class="pb-3 mb-0 small lh-sm w-100">
            <div class="d-flex justify-content-between">
              <strong class="text-gray-dark">{{$subscription->name}}</strong>
              <span class="d-block">
                <strong class="text-gray-dark">${{$subscription->price}} / Month</strong>
              </span>
            </div>
            <br>
            <span class="d-block">{{$subscription->max_videos}} max videos in collection</span>
          </div>
          <div class="d-grid mb-3">
            <a href="{{url('pricing')}}" class="btn btn-primary" role="button">Change</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Video collections</h6>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@username</strong>
        Some representative placeholder content, with some information about this user. Imagine this being some sort of status update, perhaps?
      </p>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#">All updates</a>
    </small>
  </div>
@endsection