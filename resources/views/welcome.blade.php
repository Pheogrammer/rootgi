
@extends('layouts.root')

@section('title')
    Homepage
    @endSection

@section('content')
<!--=================================
intro start-->
<section class="bg-light py-md-9 py-7 bg-holder" style="background-image: url({{asset('assets/images/bg/01.png')}});">

  <!-- container start -->
    <div class="container">

      <!-- row start -->
      <div class="row align-items-center pt-lg-9 pt-0 mt-lg-5 mt-0">
          <div class="col-md-6 mb-4 mb-md-0">

            <!-- intro caption start -->

              <span class="lead">Let your discovery glow</span>
              <h1 class="font-weight-normal">We champion technology and shift the way people think about data to solutions.</h1>
              <p class="mb-0"></p>

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
intro end -->
<!--=================================
about us strat -->
<section class="pb-lg-9  pb-7">

    <!-- container start -->
      <div class="container">

        <!-- row start -->
        <div class="row">
            <div class="col-lg-6">

              <!-- heading -->
                <div class="mb-md-6 mb-5">
                    <h1>Who are we?</h1>
                    <p>RootGIS is a company based in Dar es salaam, Tanzania, that offers solution(s) based on geospatial Technology
                        Our focus is based on the following aspects:</p>
                </div>
              <!-- heading end-->

              <!-- list start -->
              <div class="row mt-5 mb-3">
                <div class="col-sm-6">
                  <ul class="list-group">

                    <!-- ttem -->
                    <li class="list-item d-flex align-items-center mb-4">

                      <!-- check -->
                      <span class="badge badge-rounded-circle badge-primary-soft mr-2">
                        <i class="fa fa-check"></i>
                      </span>

                      <!-- text -->
                     Education
                    </li>
                    <!-- ttem end-->

                    <!-- item -->
                    <li class="list-item d-flex align-items-center mb-4">

                      <!-- check -->
                      <span class="badge badge-rounded-circle badge-primary-soft mr-2">
                        <i class="fa fa-check"></i>
                      </span>

                      <!-- text -->
                      Environment
                    </li>
                    <!-- item end-->

                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-group">

                    <!-- item-->
                    <li class="list-item d-flex align-items-center mb-4">

                      <!-- check-->
                      <span class="badge badge-rounded-circle badge-primary-soft mr-2">
                        <i class="fa fa-check"></i>
                      </span>

                      <!-- text-->
                     Education
                    </li>
                    <!-- item end-->

                    <!-- item-->
                    <li class="list-item d-flex align-items-center mb-4">

                      <!-- check-->
                      <span class="badge badge-rounded-circle badge-primary-soft mr-2">
                        <i class="fa fa-check"></i>
                      </span>

                      <!-- text-->
                      Socio-economic
                    </li>
                    <!-- item end-->


                    <!-- item end-->
                  </ul>
                </div>
              </div>
              <!-- list start -->

            </div>

            <div class="col-lg-6">

              <!-- row start -->
              <div class="row">
                <div class="col-md-6 mb-5">

                  <!-- card -->
                  <div class="card bg-primary border-0">
                    <div class="card-body">
                      <h2 class="text-white font-weight-normal">2018</h2>
                      <h4 class="card-subtitle mb-2 text-white">Founded</h4>
                    </div>
                  </div>
                  <!-- card end-->

                </div>
                <div class="col-md-6 mb-5">

                  <!-- card -->
                  <div class="card bg-dark border-0">
                    <div class="card-body">
                      <h2 class="text-primary font-weight-normal">+500</h2>
                      <h4 class="card-subtitle mb-2 text-white">Customers Served</h4>
                    </div>
                  </div>
                  <!-- card end-->

                </div>
                <div class="col-md-12">

                  <!-- card -->
                  <div class="card bg-light border-0">
                    <div class="card-body">
                        <li class="list-item d-flex align-items-center">

                            <!-- check-->
                            <span class="badge badge-rounded-circle badge-primary-soft mr-2">
                              <i class="fa fa-plus"></i>
                            </span>
                            We Create and build an environment of a strong spatial generation.
                          </li>
                          <li class="list-item d-flex align-items-center">

                              <!-- check-->
                              <span class="badge badge-rounded-circle badge-primary-soft mr-2">
                                <i class="fa fa-plus"></i>
                              </span>
                              We keep developing and using spatial technology.
                            </li>
                            <li class="list-item d-flex align-items-center">

                                <!-- check-->
                                <span class="badge badge-rounded-circle badge-primary-soft mr-2">
                                  <i class="fa fa-plus"></i>
                                </span>
                                We strive to be strong and reliable partner in all areas of our aspects.
                              </li>
                    </div>
                  </div>
                  <!-- card -->

                </div>
              </div>
            </div>
        </div>
      <!-- row end -->

      </div>
    <!-- container end -->

  </section>
  <!--=================================
  about us end-->

<!--=================================
feature start -->
<section class="pb-lg-9 pb-7 overflow-hidden">

  <!-- container start -->
    <div class="container">
      <div class="position-relative ">

        <div class="position-absolute top left ml-7 mt-8 z-index-9 d-none d-lg-block">

         <!-- svg start -->
          <img class="svg-injector" src="{{asset('assets/images/svg/shape-06.svg')}}" alt="svg">

        <!-- svg end -->

        </div>

        <!-- row start -->
        <div class="row">
          <div class="col-12 text-center mb-lg-6 mb-0 mb-lg-4">

             <!-- heading start -->
              <div class="mb-md-6 mb-5">
                <h1 class="font-weight-normal mb-2 text-left">Projects.</h1>
                <p class="mb-0">At <b>RootGIS</b> </p>
              </div>
              <!-- heading end -->

          </div>
        </div>
        <!-- row end -->


        <!-- row start -->
        <div class="row">

          <div class="col-md-4">
            <div class="p-lg-5 p-3 text-center h-100" style="background: url({{asset('assets/images/gistraining.jpg')}}); background-size: cover; ">


               <small class="d-block mt-2 mb-2 text-light bg-dark">Please note that stripe change will apply at checkout</small>
            </div>

          </div>

          <div class="col-md-8 mt-5 mt-md-0">

            <h1>ARDHI UNIVERSITY – GIS CLUB</h1>
              <div class="bg-light p-4 p-md-6 px-lg-9 text-center h-100">
                <div class="mb-md-6 mb-5">
                  <p class="text-left">To set off the first activities for the club, a training event was organized. The training was held on Saturday, 23rd January 2021 at Ardhi University.
                    It was organized by ARU GIS Club in partnership with two startup companies (Deocode Geoconsult and RootGIS) and Crowd2Map; an organization advocating the end of Female Genital Mutilation (FGM) in rural Tanzania.
                    Prior to the event, an online registration form was prepared and shared to capture those interested to attend the training and the ‘user needs’ for planning other events in the future...
                    <br>
              </div>
              <br> <button class="btn btn-primary">Read more</button> </p>
              </div>

          </div>



        </div>

{{-- questions and blog posts --}}
       <div class="col-12 text-center">
        <div class="mt-4 d-inline-block">Want to see more? <a href="#"> Click here <i class="fas fa-arrow-right pl-1"></i></a></div>
     </div>
        <!-- row end -->

         <div class="position-absolute bottom right mr-n8 mb-n8 z-index-n1 d-none d-xl-block">

            <!-- svg start -->
            <img class="svg-injector mt-9 mr-xl-n9" src="{{asset('assets/images/svg/shape.svg')}}" alt="svg">
            <img class="svg-injector ml-n8" src="{{asset('assets/images/svg/shape-02.svg')}}" alt="svg">
            <!-- svg end -->

         </div>

      </div>
    </div>
  <!-- container end -->

</section>
<!--=================================
feature end -->


<!--=================================
about start -->
<section class="pb-lg-9 pb-7">

  <!-- container start -->
    <div class="container">

      <!-- row start -->

      <!-- row start -->

    </div>
  <!-- container end -->

</section>
<!--=================================
about end -->

<!--=================================
accordion start -->
<section class="pb-lg-9  pb-7">

  <!-- container start -->
    <div class="container">

      <!-- row start -->
      <div class="row align-items-center justify-content-center">

        <div class="col-lg-8 text-center">

          <!-- heading start -->
            <div class="mb-md-6 mb-5">
              <h2 class="font-weight-normal text-left mb-2">Recent publications.</h2>
              <p class="mb-0">Without clarity, you send a very garbled message out to the Universe. We know that the law of attraction says that we will attract what we focus on, so if we don’t have clarity.</p>
            </div>
          <!-- heading end -->

        </div>

      </div>
      <!-- row start -->

      <!-- row start -->
      <div class="row">

        <div class="col-lg-6">

          <div class="accordion" id="accordionExample">
              <div class="card card bg-transparent border mb-2">
                <div class="card-header bg-transparent border-0 p-0" id="headingOne">
                  <h5 class="mb-0">
                    <button class="bg-transparent border-0 p-3 pr-6 font-weight-normal right btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Does it need to be done at all?
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body pt-0 pb-1">
                    Having clarity of purpose and a clear picture of what you desire, is probably the single most important factor in achievement. Why is Clarity so important.
                  </div>
                </div>
              </div>
             <div class="card card bg-transparent border mb-2">
                <div class="card-header bg-transparent border-0 p-0" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="bg-transparent border-0 p-3 pr-6 font-weight-normal right btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Free, with benefits?
                    </button>
                  </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body pt-0 pb-1">
                    Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision.
                  </div>
              </div>
              </div>
              <div class="card card bg-transparent border mb-2">
                <div class="card-header bg-transparent border-0 p-0" id="headingThree">
                  <h5 class="mb-0">
                    <button class="bg-transparent border-0 p-3 pr-6 font-weight-normal right btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Why is clarity so important?
                    </button>
                  </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body pt-0 pb-1">
                    If success is a process with a number of defined steps, then it is just like any other process. So, what is the first step in any process.
                  </div>
                </div>
              </div>
              <div class="card card bg-transparent border mb-2">
                <div class="card-header bg-transparent border-0 p-0" id="headingfour">
                  <h5 class="mb-0">
                    <button class="bg-transparent border-0 p-3 pr-6 font-weight-normal right btn-block text-left" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      What is the first step in any process?
                    </button>
                  </h5>
                </div>

                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                  <div class="card-body pt-0 pb-1">
                    There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight. One thing for certain though, is that irrespective of the number of steps the experts talk about, they all originate from the same roots.

                  </div>
                </div>
              </div>
              <div class="card card bg-transparent border mb-2 ">
                <div class="card-header bg-transparent border-0 p-0" id="headingfive">
                  <h5 class="mb-0">
                    <button class="bg-transparent border-0 p-3 pr-6 font-weight-normal right btn-block text-left" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                      Then it is just like any other process.?
                    </button>
                  </h5>
                </div>

                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                  <div class="card-body pt-0 pb-1">
                    Commitment – understanding the price and having the willingness to pay that price
                  </div>
                </div>
              </div>
          </div>

        </div>
        <div class="col-lg-6">

          <div class="accordion" id="accordionExample-02">
            <div class="card card bg-transparent border mb-2">
              <div class="card-header bg-transparent border-0 p-0" id="headingOne-02">
                <h5 class="mb-0">
                  <button class="bg-transparent border-0 p-3 pr-6 font-weight-normal right btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne-02" aria-expanded="false" aria-controls="collapseOne-02">
                    Works on any device?
                  </button>
                </h5>
              </div>

              <div id="collapseOne-02" class="collapse" aria-labelledby="headingOne-02" data-parent="#accordionExample-02">
                <div class="card-body pt-0 pb-1">
                  Having clarity of purpose and a clear picture of what you desire, is probably the single most important factor in achievement. Why is Clarity so important.
                </div>
              </div>
            </div>
            <div class="card card bg-transparent border mb-2">
              <div class="card-header bg-transparent border-0 p-0" id="headingTwo-02">
                <h5 class="mb-0">
                  <button class="bg-transparent border-0 p-3 pr-6 font-weight-normal right btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo-02" aria-expanded="false" aria-controls="collapseTwo-02">
                    So how do we get clarity?
                  </button>
                </h5>
              </div>

              <div id="collapseTwo-02" class="collapse" aria-labelledby="headingTwo-02" data-parent="#accordionExample-02">
                <div class="card-body pt-0 pb-1">
                  Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision.
                </div>
              </div>
            </div>
            <div class="card card bg-transparent border mb-2">
              <div class="card-header bg-transparent border-0 p-0" id="headingThree-03">
                <h5 class="mb-0">
                  <button class="bg-transparent border-0 p-3 pr-6 font-weight-normal right btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree-03" aria-expanded="false" aria-controls="collapseThree-03">
                    For those of you who are serious about having more?
                  </button>
                </h5>
              </div>

              <div id="collapseThree-03" class="collapse" aria-labelledby="headingThree-03" data-parent="#accordionExample-02">
                <div class="card-body pt-0 pb-1">
                  If success is a process with a number of defined steps, then it is just like any other process. So, what is the first step in any process.
                </div>
              </div>
            </div>
            <div class="card card bg-transparent border mb-2">
              <div class="card-header bg-transparent border-0 p-0" id="headingfour-02">
                <h5 class="mb-0">
                  <button class="bg-transparent border-0 p-3 pr-6 font-weight-normal right btn-block text-left" type="button" data-toggle="collapse" data-target="#collapsefour-02" aria-expanded="false" aria-controls="collapsefour-02">
                    So how do we get clarity?
                  </button>
                </h5>
              </div>

              <div id="collapsefour-02" class="collapse" aria-labelledby="headingfour-02" data-parent="#accordionExample-02">
                <div class="card-body pt-0 pb-1">
                  There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight. One thing for certain though, is that irrespective of the number of steps the experts talk about, they all originate from the same roots.

                </div>
              </div>
            </div>
          </div>
        </div>

       <div class="col-12 text-center">
          <div class="mt-4 d-inline-block">Still have a question? <a href="faq.html"> Ask your question here <i class="fas fa-arrow-right pl-1"></i></a></div>
       </div>

      </div>
      <!-- row start -->

    </div>
  <!-- container end -->

</section>
<!--=================================
accordion end -->

<!--=================================
contact info start -->
<section class="pb-lg-9 pb-7">

  <!-- container start -->
    <div class="container">

      <!-- row start -->
      <div class="row justify-content-center text-center">

        <div class="col-lg-9">

          <!-- heading start -->
              <div class="mb-md-6 mb-5">
                <h2 class="font-weight-normal mb-2">Talk to our dedicated team for your queries</h2>
                <p class="mb-0">Understand what you want, why you want it and what it will do for you. This is a critical factor, and as such, is probably the most difficult step.</p>
              </div>
              <!-- heading end -->

          <!-- row start -->
          <div class="row">

            <div class="col-md-4 mb-5 mb-md-0">
              <!-- card start -->
                <div class="icon-lg rounded-circle bg-primary text-white d-inline-block mb-md-2"><i class="fas fa-phone-alt"></i></div>
                <h4 class="font-weight-normal mt-3">Contact Us</h4>
                <p class="mb-0">+0987 456 321</p>
                <p class="mb-0">+0789 456 321</p>
              <!-- card end -->

            </div>

            <div class="col-md-4 mb-5 mb-md-0">
              <!-- card start -->
                <div class="icon-lg rounded-circle bg-primary text-white d-inline-block mb-md-2"><i class="far fa-envelope"></i></div>
                <h4 class="font-weight-normal mt-3">Email </h4>
                <p class="mb-0">softx@gmail.com</p>
              <!-- card end -->

            </div>

            <div class="col-md-4">
              <!-- card start -->
                <div class="icon-lg rounded-circle bg-primary text-white d-inline-block mb-md-2"><i class="fas fa-location-arrow"></i></div>
                <h4 class="font-weight-normal mt-3">Address </h4>
                <p class="mb-0">7850 Green Drive Brookfield, WI 53045</p>
              <!-- card end -->
            </div>

          </div>
          <!-- row end -->

        </div>

      </div>
      <!-- row end -->

    </div>
  <!-- container end -->

</section>
<!--=================================
contact info end -->
@endsection
