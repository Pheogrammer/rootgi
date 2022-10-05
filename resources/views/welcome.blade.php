@extends('layouts.root')

@section('title')
    Homepage
@endSection

@section('content')
    @php
        use App\Models\publication;
        $dataf = publication::orderby('id', 'desc')
            ->limit(3)
            ->get();
    @endphp

    <section class="bg-light py-md-9 py-7 bg-holder" style="background-image: url({{ asset('assets/images/bg/01.png') }});"
        id="home">

        <!-- container start -->
        <div class="container">

            <!-- row start -->
            <div class="row align-items-center pt-lg-8 pt-0  mt-0">
                <div class="col">
                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="bd-placeholder-img" height="100%"
                                    src="https://www.admitnetwork.org/wp-content/uploads/2015/09/Capture9.png"
                                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />

                                <div class="container">
                                    {{-- <div class="carousel-caption text-start">
                                        <h1>Example headline.</h1>
                                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="bd-placeholder-img" height="100%"
                                src="https://cdn.educba.com/academy/wp-content/uploads/2020/03/Applications-of-GIS.jpg"
                                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />



                                <div class="container">
                                    {{-- <div class="carousel-caption">
                                        <h1>Another example headline.</h1>
                                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="bd-placeholder-img" height="100%"
                                src="https://www.biospectrumindia.com/uploads/articles/picture1-17018.png"
                                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />


                                <div class="container">
                                    {{-- <div class="carousel-caption text-end">
                                        <h1>One more for good measure.</h1>
                                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row align-items-center pt-0 mt-lg-5 mt-0">
                <div class="col-md-6 mb-4 mb-md-0">

                    <!-- intro caption start -->

                    <span class="lead">Let your discovery glow</span>
                    <h1 class="font-weight-normal">We champion technology and shift the way people think about data to
                        solutions.</h1>
                    <p class="mb-0"></p>

                    <div class="d-inline-block app-btn d-sm-flex mt-lg-4 mt-2">

                    </div>

                    <!-- intro caption startend -->
                </div>

                <div class="col-lg-3 col-md-4 offset-md-2">
                    <h5 class="mt-3">Combine your GIS capabilities with Data science, Machine Learning, Deep Learning and
                        AI.</h5>
                    <a class="btn btn-link pl-0" href="#">Discover More <i class="fas fa-chevron-right pl-2"></i></a>
                </div>

            </div>
            <!-- row end -->

        </div>
        <!-- container end -->

    </section>

    <section class="pb-lg-9  pb-7" id="about">

        <!-- container start -->
        <div class="container">

            <!-- row start -->
            <div class="row">
                <div class="col-lg-6">

                    <!-- heading -->
                    <div class="mb-md-6 mb-5">
                        <h1>Who are we?</h1>
                        <p>RootGIS is a company based in Dar es salaam, Tanzania, that offers solution(s) based on
                            geospatial Technology
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
                                    Health
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
                                    <h2 class="text-white font-weight-normal">+500</h2>
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
            <div class="row">
                <div class="col mb-5">

                    <!-- card -->
                    <div class="card bg-primary border-0">
                        <div class="card-body">
                            <h2 class="text-white font-weight-normal">Mission </h2>
                            <p class="card-subtitle mb-2 text-white">To coordinate, educate, guide and assist the
                                implementation, maintenance and development of GIS (Geographic
                                Information Systems) technology</p>
                        </div>
                    </div>
                    <!-- card end-->

                </div>
                <div class="col mb-5">

                    <!-- card -->
                    <div class="card bg-primary border-0">
                        <div class="card-body">
                            <h2 class="text-white font-weight-normal">Vision</h2>
                            <p class="card-subtitle mb-2 text-white">To provide GIS (Geographical Information System)
                                services and spatial information in the country to inform policy and
                                enhace data based decision making</p>
                        </div>
                    </div>
                    <!-- card end-->

                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mb-5">

                    <!-- card -->
                    <div class="card bg-light border-0">
                        <div class="card-body">
                            <h2 class="text-primary font-weight-normal">Objectives</h2>
                            <p class="card-subtitle mb-2 text-primary">
                            <ul style="list-style: none;">
                                <li> <span class="badge badge-rounded-circle badge-primary-soft mr-2">
                                        <i class="fa fa-check"></i>
                                    </span> Promote skills and capacity development in GIS at all levels</li>
                                <li> <span class="badge badge-rounded-circle badge-primary-soft mr-2">
                                        <i class="fa fa-check"></i>
                                    </span> Promote Community mapping and Humanitarian entity in solving community-based
                                    problems using citizen’s generated data</li>
                                <li> <span class="badge badge-rounded-circle badge-primary-soft mr-2">
                                        <i class="fa fa-check"></i>
                                    </span> Champion Spatial Data advocacy in the country by addressing issues of spatial
                                    data collection, quality, use and sharing among
                                    stakeholders</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <!-- card end-->

                </div>
                <div class="col  mb-5">
                    <br> <br> <br>
                    <a class="card card-body bg-primary text-light border-0" href="">Read more<i
                            class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                </div>
            </div>
            <!-- row end -->

        </div>
        <!-- container end -->

    </section>

    <section class="pb-lg-9 pb-7 overflow-hidden" id="Pub">

        <!-- container start -->
        <div class="container">
            <div class="position-relative ">

                <div class="position-absolute top left ml-7 mt-8 z-index-9 d-none d-lg-block">

                    <!-- svg start -->
                    <img class="svg-injector" src="{{ asset('assets/images/svg/shape-06.svg') }}" alt="svg">

                    <!-- svg end -->

                </div>



                {{-- questions and blog posts --}}
                <div class="mb-md-6 mb-5 text-center">
                    <h2 class="font-weight-normal mb-2">Recent publications.</h2>
                    {{-- <p class="mb-0">W</p> --}}
                </div>
                <br>
                <!-- row end -->
                <div class="row">
                    <div class="col">
                        <div id="myCarousel3" class="carousel slide" data-bs-ride="carousel">
                            @php
                                $vb = 0;
                                $vn = 0;
                            @endphp
                            <div class="carousel-indicators">
                                @foreach ($dataf as $pub)
                                    <button type="button" data-bs-target="#myCarousel3"
                                        data-bs-slide-to="{{ $vn }}"
                                        @php if($vn ==0 ) {echo 'class="active"';} @endphp aria-current="true"
                                        aria-label="Slide {{ $vn }}"></button>
                                    @php
                                        $vn++;
                                    @endphp
                                @endforeach

                            </div>
                            <div class="carousel-inner">

                                @foreach ($dataf as $pub)
                                    <div class="carousel-item @php if($vb == 0){echo 'active';} @endphp card">

                                        <img class="card-img-top" style="max-width: 100%;"
                                            src="{{ asset('posts/' . $pub->image) }}" alt="">
                                        <div class="card-body">
                                            <h2 class="card-title">{{ $pub->title }}</h2>
                                            <p class="card-text">{!! nl2br($pub->content) !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                        <button class="carousel-control-prev text-primary" type="button" data-bs-target="#myCarousel3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next text-primary" type="button" data-bs-target="#myCarousel3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center">
                <div class="mt-4 d-inline-block">Want to see more publications? <a href="#"> Click here <i
                            class="fas fa-arrow-right pl-1"></i></a></div>
            </div>

            <div class="position-absolute bottom right mr-n8 mb-n8 z-index-n1 d-none d-xl-block">

                <!-- svg start -->
                <img class="svg-injector mt-9 mr-xl-n9" src="{{ asset('assets/images/svg/shape.svg') }}" alt="svg">
                <img class="svg-injector ml-n8" src="{{ asset('assets/images/svg/shape-02.svg') }}" alt="svg">
                <!-- svg end -->

            </div>

        </div>
        </div>
        <!-- container end -->

    </section>


    <section class="pb-lg-9 pb-7" id="contact">

        <!-- container start -->
        <div class="container">

            <!-- row start -->
            <div class="row justify-content-center text-center">

                <div class="col-lg-9">

                    <!-- heading start -->
                    <div class="mb-md-6 mb-5">
                        <h2 class="font-weight-normal mb-2">Talk to our dedicated team for your queries</h2>
                        <p class="mb-0">Understand what you want, why you want it and what it will do for you. This is a
                            critical factor, and as such, is probably the most difficult step.</p>
                    </div>
                    <!-- heading end -->

                    <!-- row start -->
                    <div class="row">

                        <div class="col-md-4 mb-5 mb-md-0">
                            <!-- card start -->
                            <div class="icon-lg rounded-circle bg-primary text-white d-inline-block mb-md-2"><i
                                    class="fas fa-phone-alt"></i></div>
                            <h4 class="font-weight-normal mt-3">Contact Us</h4>
                            <p class="mb-0">+255 769 806 836</p>
                            <!-- card end -->

                        </div>

                        <div class="col-md-4 mb-5 mb-md-0">
                            <!-- card start -->
                            <div class="icon-lg rounded-circle bg-primary text-white d-inline-block mb-md-2"><i
                                    class="far fa-envelope"></i></div>
                            <h4 class="font-weight-normal mt-3">Email </h4>
                            <p class="mb-0">
                                info@rootgis.org </p>
                            <!-- card end -->

                        </div>

                        <div class="col-md-4">
                            <!-- card start -->
                            <div class="icon-lg rounded-circle bg-primary text-white d-inline-block mb-md-2"><i
                                    class="fas fa-location-arrow"></i></div>
                            <h4 class="font-weight-normal mt-3">Address </h4>
                            <p class="mb-0">Bagamoyo Road, Dar es salaam</p>
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
