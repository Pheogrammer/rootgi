@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('New Publication') }}</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                         <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{{ Session::get('message') }}</li>
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <div class="col">
                        <form action="{{route('savenewpost')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="my-input">Title</label>
                                <input id="my-input" class="form-control" required type="text" name="title">
                            </div>
                            <div class="form-group">
                                <label for="my-input">Description</label>
                                <textarea id="my-input" class="form-control" required rows="8" name="description"></textarea>
                            </div>
                            <div class="row">
                                <div class="col">

                                    <div class="form-group">
                                        <label for="my-input">Image</label>
                                        <input id="my-input" class="form-control" type="file" accept="image/*"  name="image">
                                    </div>
                                </div>
                                <div class="col">

                                    <div class="form-group">
                                        <label for="my-input">Image</label>
                                        <input id="my-input" class="form-control" type="file" accept="image/*"  name="image1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                    <div class="form-group">
                                        <label for="my-input">Link</label>
                                        <input id="my-input" class="form-control" required type="text" name="link">
                                    </div>
                                </div>
                                <div class="col">

                                    <div class="form-group">
                                        <label for="my-input">Link</label>
                                        <input id="my-input" class="form-control" type="text" name="link1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
