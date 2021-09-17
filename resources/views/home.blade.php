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
                            <h5 class="card-title">Latest Publication</h5>

                            <p class="card-text">
                                <h6>{{$pub->title}}</h6>
                                <p>
                                    {{$pub->content}}
                                </p>
                                <small>{{$pub->created_at}}</small>, posted By {{$pub->created_by}}
                            </p>
                        </div>
                    </div>
<br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Latest Events </h5>

                            <p class="card-text">
                                <h6>{{$pub->title}}</h6>
                                <p>
                                    {{$pub->content}}
                                </p>
                                <small>{{$pub->created_at}}</small>, posted By {{$pub->created_by}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
