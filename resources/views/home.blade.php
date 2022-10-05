@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Latest Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

@foreach($pub as $pub)
      <div class="card">
        <img class="bd-placeholder-img card-img-top" src="{{asset('posts/'.$pub->image)}}" height="200" role="img" focusable="false">

        <div class="card-body">
          <h5 class="card-title">{{$pub->title}}</h5>
          <p class="card-text">{!! nl2br($pub->content)!!}</p>
          <a href="">Read More</a>
          <p class="card-text"><small class="text-muted">{{$pub->created_at}}</small>, posted By {{$pub->created_by}}</small></p>

        </div>
      </div> <br>
@endforeach
      <a href="{{route('allposts')}}" class="btn btn-primary">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
