@extends('layouts.root')

@section('title')
    Login
    @endSection
@section('content')
<section class="bg-light py-md-9 py-7 bg-holder" style="background-image: url({{asset('assets/images/bg/01.png')}});">

    <!-- container start -->
      <div class="container">

        <!-- row start -->
        <div class="row align-items-center pt-lg-9 pt-0 mt-lg-5 mt-0">
            <div class="col-md-6 mb-4 mb-md-0">

              <!-- intro caption start -->

              <div class="container">
                <div class="row justify-content-center no-gutters">
                  <div class="col-lg-12 bg-dark px-2 px-md-8 py-md-9 py-5 d-flex z-index-9 mb-5 mb-lg-0">
                    <div class="align-self-center w-100">
                      <div class="mb-3 text-center">
                        <h2 class="text-white">Login</h2>
                      </div>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                          <input type="email"  name="email" class="form-control bg-transparent @error('email') is-invalid @enderror" id="email" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email">
                          @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control bg-transparent @error('password') is-invalid @enderror" placeholder="Enter Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                          </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <hr>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

                <div class="d-inline-block app-btn d-sm-flex mt-lg-4 mt-2">
                  {{-- <a class="" href="#">
                  <img class="img-fluid mr-2 mt-2" src="{{asset('assets/images/google-play-btn.png')}}" alt="">
                  </a>
                  <a class="" href="#">
                  <img class="img-fluid mt-2" src="{{asset('assets/images/app-store-btn.png')}}" alt="">
                  </a> --}}
                </div>

                <!-- intro caption startend -->
            </div>

            <div class="col-lg-3 col-md-4 offset-md-2">
                {{-- <a class="btn-icon rounded-circle bg-primary text-white btn-animation d-inline-block mb-2 popup-youtube" href="#"><i class="fas fa-play text-white"></i></a> --}}
                <h5 class="mt-3">Combine your GIS capabilities with Data science, Machine Learning, Deep Learning and AI.</h5>
                <a class="btn btn-link pl-0" href="#">Discover More <i class="fas fa-chevron-right pl-2"></i></a>
            </div>

        </div>
      <!-- row end -->

      </div>
    <!-- container end -->

  </section>
<!--=================================
forgot password strat -->
@endsection
