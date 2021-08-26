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

<!--=================================
alert start -->

{{-- <div class="alert alert-warning alert-dismissible text-white text-center mb-0 rounded-0 fade show" role="alert">
  OMG! Can't wait for the release of the new website design end of this month.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> --}}

<!--=================================
header start -->

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
                <a class="nav-link" href="#"><i class="far fa-envelope mr-1"></i> RootGIS2018@gmail.com <span class="pl-2">|</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-paper-plane mr-1"></i> Bagamoyo Road, Dar es salaam</a>
              </li>
            </ul>
            <!-- button -->
            <div class="ml-auto">
              <ul class="nav justify-content-center">
              <!-- call number -->
              <li class="nav-item">
                <a class="nav-link" href="sign-in.html"><i class="ti-lock fa-flip-horizontal mr-1"></i> Login <span class="pl-2">|</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sign-up.html"><i class="ti-user mr-1"></i> Sign Up</a>
              </li>
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
          <a class="navbar-brand "  href="index-2.html">
            <img class="svg-injector bg-light" style=" padding: 10px; border-radius:5px; width: 25%; height:20%;" src="{{asset('assets/logo.svg')}}" alt="Logo"></a>
          <!-- navbar toggler -->
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <!-- navbar -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link dropdown-toggle" href="index-2.html" id="navbarDropdownhome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Home
                </a>
                <!-- dropdown menu  -->
                <div class="dropdown-menu dropdown-menu dropdown-menu-arrow p-0" aria-labelledby="navbarDropdownhome">
                  <ul class="list-unstyled pt-1 pb-2">
                    <li>
                      <a class="dropdown-item" href="index-2.html">Home 01</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="index-02.html">Home 02</a>
                    </li>
                    <li class="active">
                      <a class="dropdown-item" href="index-03.html">Home 03</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="index-04.html">Home 04</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="index-05.html">Home 05</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="index-06.html">Home 06</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownpage" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <!-- dropdown menu  -->
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0" aria-labelledby="navbarDropdownpage">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <ul class="list-unstyled pt-1 pb-2">
                        <li>
                          <a class="dropdown-item" href="about-us.html">About us</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="service.html">Services</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="service-detail.html">Service Detail</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="careers.html">Careers</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="careers-detail.html">Careers Detail</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="faq.html">Faq</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="pricing.html">Pricing</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="help.html">Help</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="help-detail.html">Help Detail</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="case-studies.html">Case Studies</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="case-study-detail.html">Case Study Detail</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <ul class="list-unstyled pt-1 pb-2">
                        <li><a class="dropdown-item" href="team.html">Team</a></li>
                        <li>
                          <a class="dropdown-item" href="team-detail.html">Team Detail</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="sign-in.html">Sign In</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="sign-up.html">Sign Up</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="terms-and-conditions.html">Terms and Conditions</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="maintenance.html">Maintenance</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="comming-soon.html">Comming Soon</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="404-error.html">404</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <div class="h-100" style="background-image:url({{asset('assets/images/about/about-01.jpg')}}); background-position: center center; background-size: cover">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link dropdown-toggle" href="portfolio.html" id="navbarDropdownportfolio" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Portfolio
                </a>
                <!-- dropdown menu  -->
                <div class="dropdown-menu dropdown-menu dropdown-menu-arrow p-0" aria-labelledby="navbarDropdownportfolio">
                  <ul class="list-unstyled pt-1">
                    <li>
                      <a class="dropdown-item" href="portfolio.html">Portfolio</a>
                    </li>
                    <li>
                      <a class="dropdown-item pb-2" href="portfolio-detail.html">Portfolio Detail</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownblog" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Blog
                </a>
                <!-- dropdown menu  -->
                <div class="dropdown-menu dropdown-menu dropdown-menu-arrow p-0" aria-labelledby="navbarDropdownblog">
                  <ul class="list-unstyled pt-1 pb-2">
                    <li>
                      <a class="dropdown-item" href="blog.html">Blog</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us.html">Contact</a>
              </li>
            </ul>
          </div>
           <div class="d-sm-flex ml-lg-auto m-sm-auto d-none">
              <ul class="nav ml-1 ml-lg-2 align-self-center">
                <!-- button -->
                <li class="nav-item pl-2">
                  <a class="btn btn-dark" href="pricing.html">
                    Free Trial
                  </a>
                </li>
              </ul>
            </div>
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
<footer class="footer bg-primary py-lg-9 py-7">

    <!-- container start -->
    <div class="container">

      <!-- row start -->
      <div class="row">

        <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
          <div class="mb-5">
            <a href="#"><img class="svg-injector" src="{{asset('assets/images/logo-light.svg')}}" alt="Logo"></a>
          </div>
          <!-- <div class="d-block d-flex mb-4">
            <a class="btn btn-light btn-sm d-flex" href="#">
              <i class="fab fa-google-play h2 mb-0 mr-2"></i>
              <div class="btn-text text-left">
                <small>Get in on </small>
                <span class="mb-0 d-block">google play</span>
              </div>
            </a>
             <a class="btn btn-light btn-sm d-flex ml-2 mr-sm-2" href="#">
              <i class="fab fa-apple h2 mb-0 mr-2"></i>
              <div class="btn-text text-left">
                <small>Download on the </small>
                <span class="mb-0 d-block">App store</span>
              </div>
            </a>
          </div> -->
          <div class="d-inline-block app-btn d-sm-flex mb-4">
              <a class="" href="#">
                <img class="img-fluid mr-2 mt-2" src="{{asset('assets/images/google-play-btn-white.png')}}" alt="">
              </a>
              <a class="" href="#">
                <img class="img-fluid mt-2" src="{{asset('assets/images/app-store-btn-white.png')}}" alt="">
              </a>
          </div>
          <p class="mb-0 text-white">© <a class="text-white" href="index-2.html">Soft-x</a> 2020. All rights reserved</p>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h4 class="font-weight-normal text-white">Company</h4>
          <ul class="list-unstyled mb-0">
            <li><a class="text-white" href="index-2.html">Home</a></li>
            <li><a class="text-white" href="about-us.html">About</a></li>
            <li><a class="text-white" href="pricing.html">Pricing</a></li>
            <li><a class="text-white" href="contact-us.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
          <h4 class="font-weight-normal text-white">Legal</h4>
          <ul class="list-unstyled mb-0">
            <li><a class="text-white" href="privacy-policy.html">Privacy Policy</a></li>
            <li><a class="text-white" href="terms-and-conditions.html">Terms of use</a></li>
            <li><a class="text-white" href="faq.html">FAQ</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6">
          <h4 class="font-weight-normal text-white">Social Link</h4>
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
  model start-->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-light border-0">
          <h4 class="modal-title font-weight-normal" id="exampleModalCenterTitle">Log In & Register</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-5">
          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="login" role="tabpanel" aria-labelledby="login-tab">
              <form class="form-row mt-4 align-items-center">
                <div class="form-group col-sm-12">
                  <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group col-sm-12">
                  <input type="Password" class="form-control" placeholder="Password">
                </div>
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                    <li class="mr-1 small"><a href="#">Already Registered User? Click here to login</a></li>
                  </ul>
                </div>
              </form>

            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
              <form class="form-row mt-4 align-items-center">
                <div class="form-group col-sm-12">
                  <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group col-sm-12">
                  <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group col-sm-12">
                  <input type="Password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group col-sm-12">
                  <input type="Password" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                    <li class="mr-1 small"><a href="#">Already Registered User? Click here to login</a></li>
                  </ul>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--=================================
  model end-->

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
