@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                          <div class="row ">
                              <div class="col">
                                <h5 class="card-title">Latest Publication</h5>
                              </div>
                              <div class="col">
                                <a href="" class="btn btn-primary text-right">View All</a>
                              </div>
                          </div>

                                <h6 class='text-bold'>{{$pub->title}}</h6>
                                <p>
                                    <img src="{{asset('posts/'.$pub->image)}}" height="200" alt="image"> <br>
                                    {{$pub->content}}
                                </p>
                                <small>{{$pub->created_at}}</small>, posted By {{$pub->created_by}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
