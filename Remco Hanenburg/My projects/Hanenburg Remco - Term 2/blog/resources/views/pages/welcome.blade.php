@extends('main')

@section('title', '| Homepage')

@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-4">Welcome to my blog!</h1>
            <p class="lead">Thanks for visiting my blog. Here is my popularest post.</p>
            <hr class="my-4">
            <p class="lead"><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div>
        </div>
      </div> <!-- End of row -->
      <div class="row">
        <div class="col-md-8">

          @foreach ($posts as $post)

            <div class="post">
              <h3>{{ $post->title }}</h3>
              <p>{{ $post->body }}</p>
              <a href="{{ route('') }}" class="btn btn-primary">Read more</a>
            </div>

            <hr>

        @endforeach

        </div>
        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
        </div>
      </div>
    </div>
  @endsection
