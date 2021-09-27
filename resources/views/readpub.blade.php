@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

      <div class="card">
        <img class="bd-placeholder-img card-img-top" src="{{asset('posts/'.$pub->image)}}" height="100%" role="img" focusable="false">

        <div class="card-body">
          <h5 class="card-title">{{$pub->title}}</h5>
          <p class="card-text">{{$pub->content}}</p>
          <p class="card-text"><small class="text-muted">{{$pub->created_at}}</small>, posted By {{$pub->created_by}}</small></p>

        </div>
      </div> <br>
                </div>
        </div>
    </div>
</div>
@endsection
{{-- <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text> --}}
