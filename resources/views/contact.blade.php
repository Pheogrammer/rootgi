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


            <!-- heading -->
              <div class="mb-md-6 mb-5">
                <h2 class="font-weight-normal mb-2">Let’s Get In Touch!</h2>
                <p>It would be great to hear from you! <br> If you got any questions, please do not hesitate to send us a message. <br> We are looking forward to hearing from you! We reply within 24 hours!</p>
              </div>
            <!-- heading end-->

            <!-- form start -->
            <form class="row mt-6">
              <div class="form-group col-md-6 mb-5">
                <input type="text" class="form-control" placeholder="Your Full Name">
              </div>
              <div class="form-group col-md-6 mb-5">
                <input type="text" class="form-control" placeholder="Your Number">
              </div>
              <div class="form-group col-md-6 mb-5">
                <input type="email" class="form-control" placeholder="Your Email Address">
              </div>
              <div class="form-group col-md-6 mb-5">
                <input type="text" class="form-control" placeholder="Company Name">
              </div>
              <div class="form-group col-md-12 mb-5">
                <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
              </div>
              <div class="col-md-12">
               <button type="submit" class="btn btn-primary">Send Message</button>
             </div>
            </form>
            <!-- form end -->

          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">

          <!-- contact info start -->
          <div class="bg-primary p-5 text-white">
            <h2 class="text-white font-weight-normal">Contact info</h2>
            <p class="mb-6">It would be great to hear from you! If you got any questions</p>
            <div class="media mb-4">
              <i class="ti-map-alt fa-3x"></i>
              <div class="media-body pl-4">
                <h4 class="mt-0 mb-1 text-white">Address</h4>
                <p>Bagamoyo Road, Dar es salaam</p>
              </div>
            </div>
            <div class="media mb-4">
              <i class="ti-email fa-3x"></i>
              <div class="media-body pl-4">
                <h4 class="mt-0 mb-1 text-white">Email</h4>
                <p> <a href="mail:info@rootgis.org">  info@rootgis.org</a>

                </p>
              </div>
            </div>
            <div class="media">
              <i class="ti-mobile fa-3x"></i>
              <div class="media-body pl-4">
                <h4 class="mt-0 mb-1 text-white">Mobile Number</h4>
                <p> <a href="tel:+255769806836"> </a></p>
              </div>
            </div>
          </div>
          <!-- contact info end -->

          </div>
        </div>
        <!-- row end -->

      </div>
      <!-- container end -->

  </section>
  <!--=================================
  contact form end-->

  <!--=================================
  action box start -->
  <section class="mb-7 mb-lg-9">

    <!-- container start -->
      <div class="container">

        <div class="bg-light pt-5 pb-3 px-5">

            <!-- row start -->
          <div class="row align-items-center">

            <div class="col-lg-9 pb-3">

                  <h2 class="mb-0 font-weight-normal">Find us on the google maps</h2>

              </div>

              <div class="col-lg-3 text-lg-right pb-3">
                  <a class="btn btn-primary" href="#">Get Directions <i class="fa fa-map-marker-alt pl-2"></i></a>
              </div>

            </div>

        </div>
         <!-- row start -->

      </div>
    <!-- container end -->

  </section>
  <!--=================================
  action box end -->

@endsection
