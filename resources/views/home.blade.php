@extends('layouts.app')

@section('content')
<main>

  <section class="text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Featured Videos</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      </div>
    </div>
  </section>

  <div class="album bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($videos as $video)
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://picsum.photos/300/200?t={{rand(1,100)}}" class="card-img-top" alt="...">

            <div class="card-body">
              <p class="card-text">{{$video->name}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Add to collection</button>
                </div>
                <small class="text-muted">{{gmdate('i:s', $video->duration)}} mins</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

</main>
@endsection