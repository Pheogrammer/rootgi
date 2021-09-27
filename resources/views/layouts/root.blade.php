<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Tanzania,GIS, Mapping, TanzaniaGIS, RootGIS, mapathon, Geography,Mapping Trainings" />
    <meta name="description" content="RootGIS is a pioneer of GIS awareness creation to the local community. Despite the fact that organizations, Academic institutions and the government have been using GIS, its understanding is not widespread in the community. " />
    <meta name="author" content="Alfeo Raymond" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RootGIS - @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/rootgis.png')}}" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css0cf6.css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{asset('assets/libs/font-awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/libs/themify/css/themify-icons.min.css')}}" />


    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{asset('assets/libs/owl-carousel/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/libs/magnific-popup/css/magnific-popup.css')}}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  </head>

<body>

<header class="header header-transparent header-sticky header-style-02">
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-block d-md-flex align-items-center text-center">
            <ul class="nav justify-content-center">
              <!-- call number -->
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-phone fa-flip-horizontal mr-1"></i> +255  769 806 836 <span class="pl-2">|</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-envelope mr-1"></i> info@rootgis.org <span class="pl-2">|</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Bagamoyo Road, Dar es salaam</a>
              </li>
            </ul>
            <!-- button -->
            <div class="ml-auto">
              <ul class="nav justify-content-center">
              <!-- call number -->
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><i class="ti-lock fa-flip-horizontal mr-1"></i> Login <span class="pl-2">|</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"><i class="ti-user mr-1"></i> Sign Up</a>
              </li>
              @else

              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}"><i class="ti-user mr-1"></i> {{auth()->user()->name}}</a>
              </li>

              @endguest
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-12 px-0 px-lg-3">
        <!-- navbar top -->

        <!-- main navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-2 px-4">
          <a class="navbar-brand "  href="#">
            <img class="svg-injector bg-light" style=" padding: 10px; border-radius:5px; width: 25%; height:20%;" src="{{asset('assets/logo.svg')}}" alt="Logo"></a>
          <!-- navbar toggler -->
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <!-- navbar -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link" href="/">
                  Home
                </a>
              </li>
              <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link" href="#" >
                  Publications
                </a>
              </li>
              <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link" href="#" >
                  Events
                </a>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
            </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!--=================================
header end -->
@yield('content')


<!--=================================
footer-->
<footer class="footer bg-primary  py-7">

    <!-- container start -->
    <div class="container">

      <!-- row start -->
      <div class="row">

        <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
          <div class="mb-5">
            <a href="#">
                <img class="svg-injector bg-light" style=" padding: 10px; border-radius:5px; width: 25%; height:20%;" src="{{asset('assets/logo.svg')}}" alt="Logo">
        </a>
          </div>

          <p class="mb-0 text-white">© <a class="text-white" href="#"></a> {{date('Y')}}. All rights reserved</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <ul class="list-unstyled mb-0">
            <li><a class="text-white" href="/">Home</a></li>
            <li><a class="text-white" href="#">Publications</a></li>
            <li><a class="text-white" href="#">Events</a></li>
            <li><a class="text-white" href="/contact">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <ul class="list-unstyled mb-0">
            <li><a class="text-white" href="#"><i class="fab fa-facebook-f pr-2"></i>Facebook</a></li>
            <li><a class="text-white" href="#"><i class="fab fa-instagram pr-2"></i>Instagram</a></li>
            <li><a class="text-white" href="#"><i class="fab fa-twitter pr-2"></i>Twitter</a></li>
            <li><a class="text-white" href="#"><i class="fab fa-linkedin pr-2"></i>linkedin</a></li>
          </ul>
        </div>

      </div>
      <!-- row end -->

    </div>
    <!-- container end -->

  </footer>
  <!--=================================
  footer-->


  <!--=================================
  back to top-->
  <div id="back-to-top">
    <a class="arrow" href="#top"><i class="ti-arrow-up"></i></a>
  </div>
  <!--=================================
  back to top-->

  <!--=================================
  Javascript -->

    <!-- JS Global Compulsory -->
    <script src="{{asset('assets/libs/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/libs/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Page JS Implementing Plugins -->
    <script src="{{asset('assets/libs/appear/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/libs/counter/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/libs/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/libs/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- svg Injector)-->
    <script src="{{asset('assets/libs/svg-injector/dist/svg-injector.min.js')}}"></script>

    <!-- Custom Scripts -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

  </body>


  </html>
