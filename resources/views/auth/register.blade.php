@extends('layouts.app')

@section('content')

    <html lang="en">

    <!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 08:18:36 GMT -->
    <head>
        <meta charset="utf-8">

        <meta name="description" content="RhSourcing - Employment Website" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>RhSourcing</title>

        <!-- Favicon -->
        <link href="images/favicon.ico" rel="shortcut icon" />

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

        <!-- CSS Global Compulsory (Do not remove)-->
        <link rel="stylesheet" href="css/font-awesome/all.min.css" />
        <link rel="stylesheet" href="css/flaticon/flaticon.css" />
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

        <!-- Template Style -->
        <link rel="stylesheet" href="css/style.css" />

    </head>
    <body>

    <!--=================================
    header -->

    <!--=================================
    header -->

    <!--=================================
    inner banner -->

    <!--=================================
    inner banner -->

    <!--=================================
    Signin -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12">
                    <div class="login-register">
                        <fieldset>
                            <legend class="px-2">Choose your Account Type</legend>
                            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
                                <li class="nav-item mr-4">
                                    <a class="nav-link active"  data-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                                        <div class="d-flex">
                                            <div class="tab-icon">
                                                <i class="flaticon-users"></i>
                                            </div>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Candidate</h6>
                                                <p class="mb-0">Log in as Candidate</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  data-toggle="tab" href="#employer" role="tab" aria-selected="false">
                                        <div class="d-flex">
                                            <div class="tab-icon">
                                                <i class="flaticon-suitcase"></i>
                                            </div>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Employer</h6>
                                                <p class="mb-0">Log in as Employer</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </fieldset>
                        <div class="tab-content">

                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">{{ __('Register') }}</div>

                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('register') }}">
                                                        @csrf
                                                        {{ method_field('POST') }}
                                                        <div class="tab-pane active" id="candidate" role="tabpanel">
                                                        <div class="form-group row">
                                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                                @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-6 offset-md-4">
                                                                <button type="submit" class="btn btn-primary" >
                                                                    {{ __('Register') }}
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                                      </div>
                            <div class="tab-pane fade" id="employer" role="tabpanel">

                            </div>
                        </div>
                        <div class="mt-4">
                            <fieldset>
                                <legend class="px-2">Login or Sign up with</legend>
                                <div class="social-login">
                                    <ul class="list-unstyled d-flex mb-0">
                                        <li class="facebook text-center">
                                            <a href="#"> <i class="fab fa-facebook-f mr-4"></i>Login with Facebook</a>
                                        </li>
                                        <li class="twitter text-center">
                                            <a href="#"> <i class="fab fa-twitter mr-4"></i>Login with Twitter</a>
                                        </li>
                                        <li class="google text-center">
                                            <a href="#"> <i class="fab fa-google mr-4"></i>Login with Google</a>
                                        </li>
                                        <li class="linkedin text-center">
                                            <a href="#"> <i class="fab fa-linkedin-in mr-4"></i>Login with Linkedin</a>
                                        </li>
                                    </ul>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Signin -->

    <!--=================================
    feature-info -->
    <section class="feature-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
                        <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
                            <i class="flaticon-team"></i>
                        </div>
                        <div class="feature-info-content text-white pl-sm-4 pl-0">
                            <p>Jobseeker</p>
                            <h5 class="text-white">Looking For Job?</h5>
                        </div>
                        <a class="ml-auto align-self-center" href="#">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-info feature-info-02 p-4 p-lg-5 bg-dark">
                        <div class="feature-info-icon mb-3 mb-sm-0 text-primary">
                            <i class="flaticon-job-3"></i>
                        </div>
                        <div class="feature-info-content text-white pl-sm-4 pl-0">
                            <p>Recruiter</p>
                            <h5 class="text-white">Are You Recruiting?</h5>
                        </div>
                        <a class="ml-auto align-self-center" href="#">Post a job<i class="fas fa-long-arrow-alt-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    feature-info-->

    <!--=================================
    footer-->
    <footer class="footer bg-light">
        <div class="position-relative">
            <svg class="footer-shape"
                 xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 width="100%" height="85px">
                <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                      d="M-0.000,-0.001 L1923.000,-0.001 L1923.000,84.999 C1608.914,41.669 1279.532,19.653 962.500,19.000 C635.773,18.326 323.692,40.344 -0.000,84.999 C-0.000,-83.334 -0.000,168.332 -0.000,-0.001 Z"/>
            </svg>
        </div>
        <div class="container pt-5">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h5 class="text-dark mb-4">Trending Job</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Browse Jobs</a></li>
                            <li><a href="#">Browse Categories</a></li>
                            <li><a href="#">Submit Resume</a></li>
                            <li><a href="#">Candidate Dashboard</a></li>
                            <li><a href="#">Job Alerts</a></li>
                            <li><a href="#">My Bookmarks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="footer-link">
                        <h5 class="text-dark mb-4">Trending Companies</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Shortcodes</a></li>
                            <li><a href="#">Job Page</a></li>
                            <li><a href="#">Job Page Alternative</a></li>
                            <li><a href="#">Resume Page</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <h5 class="text-dark mb-4">Subscribe Us</h5>
                    <div class="footer-subscribe">
                        <p>Sign Up to our Newsletter to get the latest news and offers.</p>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">Get Notified</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <h5 class="text-dark mb-4">Download App</h5>
                    <div class="footer-subscribe">
                        <p>Download the latest Slick new job apps now</p>
                        <div class="d-inline-block">
                            <a class="btn btn-white btn-sm btn-app " href="#">
                                <i class="fab fa-apple"></i>
                                <div class="btn-text text-left">
                                    <small>Download on the </small>
                                    <span class="mb-0 d-block">App Store</span>
                                </div>
                            </a>
                            <a class="btn btn-white btn-sm btn-app mt-3" href="#">
                                <i class="fab fa-google-play"></i>
                                <div class="btn-text text-left">
                                    <small>Get it on  </small>
                                    <span class="mb-0 d-block">Google Play</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-dark mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="d-flex justify-content-md-start justify-content-center">
                            <ul class="list-unstyled d-flex mb-0">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-right mt-4 mt-md-0">
                        <p class="mb-0"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Jobber </a> All Rights Reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
    footer-->

    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">
        <i class="fas fa-angle-up"></i>
    </div>
    <!--=================================
    Back To Top-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

    </body>

    <!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 08:18:36 GMT -->
    </html>

@endsection
