<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rhsourcing') }}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">
                <a class="navbar-brand" href="http://127.0.0.1/RHsourcing/public">
                    FIND ME
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                        <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
                            <div class="container-fluid">
                                <div class="navbar-collapse collapse justify-content-start">
                                    <ul class="nav navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<i class="fas fa-chevron-down fa-xs"></i></a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="home">index Default</a></li>
                                                <li><a class="dropdown-item" href="index-02.html">index 02</a></li>
                                                <li><a class="dropdown-item" href="index-03.html">index 03</a></li>
                                                <li><a class="dropdown-item" href="index-map.html">index map</a></li>
                                                <li><a class="dropdown-item" href="index-slider.html">index Slider</a></li>
                                                <li><a class="dropdown-item" href="index-bg-video.html">index bg video</a></li>
                                                <li><a class="dropdown-item" href="index-splash.html">index splash</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown nav-item">
                                            <a href="properties.html" class="nav-link" data-toggle="dropdown">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
                                            <ul class="dropdown-menu megamenu dropdown-menu-lg">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-4 mb-2 mb-sm-0">
                                                            <h6 class="mb-3 nav-title">Pages</h6>
                                                            <ul class="list-unstyled mt-lg-3">
                                                                <li><a href="about.html">About</a></li>
                                                                <li><a href="services.html">Services</a></li>
                                                                <li><a href="pricing.html">Pricing</a></li>
                                                                <li><a href="career.html">Career</a></li>
                                                                <li><a href="advertising.html">Advertising</a></li>
                                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-4 mb-2 mb-sm-0">
                                                            <h6 class="mb-3 nav-title">Pages</h6>
                                                            <ul class="list-unstyled mt-lg-3">
                                                                <li><a href="blog.html">Blog</a></li>
                                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                                                <li><a href="post-a-job.html">Post a Job</a></li>
                                                                <li><a href="faqs.html">Faq</a></li>
                                                                <li><a href="browse-categories.html">Browse Categories</a></li>
                                                                <li><a href="browse-locations.html">Browse Locations</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h6 class="mb-3 nav-title">Pages</h6>
                                                            <ul class="list-unstyled mt-lg-3">
                                                                <li><a href="login.html">Login</a></li>
                                                                <li><a href="register.html">Register</a></li>
                                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                                                <li><a href="404-error.html">404 Error</a></li>
                                                                <li><a href="terms-and-conditions.html">T&C</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="agency-logo pt-4 pb-3">
                                                                <h6 class="mb-3 nav-title">Top Agency</h6>
                                                                <ul class="list-unstyled">
                                                                    <li>
                                                                        <div class="job-list">
                                                                            <div class="job-list-logo">
                                                                                <img class="img-fluid" src="images/svg/07.svg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="job-list">
                                                                            <div class="job-list-logo">
                                                                                <img class="img-fluid" src="images/svg/06.svg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="job-list">
                                                                            <div class="job-list-logo">
                                                                                <img class="img-fluid" src="images/svg/05.svg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="job-list">
                                                                            <div class="job-list-logo">
                                                                                <img class="img-fluid" src="images/svg/04.svg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="job-list">
                                                                            <div class="job-list-logo">
                                                                                <img class="img-fluid" src="images/svg/03.svg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Listing <i class="fas fa-chevron-down fa-xs"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="job-grid.html">Job Grid</a></li>
                                                <li><a class="dropdown-item" href="job-listing.html">Job Listing</a></li>
                                                <li><a class="dropdown-item" href="job-detail.html">Job Detail</a></li>
                                                <li><a class="dropdown-item" href="job-listing-map.html">Job Listing Map</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown nav-item mega-menu">
                                            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">Elements<i class="fas fa-chevron-down fa-xs"></i></a>
                                            <ul class="dropdown-menu megamenu">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-lg-5 mb-3 mb-lg-0">
                                                            <h6 class="mb-3 nav-title">Search Types</h6>
                                                            <ul class="list-unstyled mt-lg-3">
                                                                <li><a href="search-style-under-banner.html">Search style under banner</a></li>
                                                                <li><a href="search-style-above-banner.html">Search style above banner</a></li>
                                                                <li><a href="search-style-below-banner.html">Search style below banner</a></li>
                                                                <li><a href="search-style-advanced.html">Advanced Search style</a></li>
                                                                <li><a href="search-style-classic.html">Search style classic</a></li>
                                                                <li><a href="search-style-with-filter.html">Search style with filter</a></li>
                                                                <li><a href="search-style-advanced-02.html">Advanced Search style 02 </a></li>
                                                                <li><a href="search-style-advanced-03.html">Advanced Search style 03 </a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                                            <h6 class="mb-3 nav-title">Elements</h6>
                                                            <ul class="list-unstyled mt-lg-3">
                                                                <li><a href="element-feature-box.html">Feature box</a></li>
                                                                <li><a href="element-testimonials.html">Testimonials</a></li>
                                                                <li><a href="element-accordion.html">Accordion</a></li>
                                                                <li><a href="element-tabs.html">Tabs</a></li>
                                                                <li><a href="element-typography.html">Typography</a></li>
                                                                <li><a href="element-counter.html">counter</a></li>
                                                                <li><a href="element-countdown.html">Countdown</a></li>
                                                                <li><a href="element-category.html">Category</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-4">
                                                            <div class="menu-banner bg-dark p-3 pt-4 text-center border-radius h-100 d-none d-lg-block">
                                                                <h5 class="text-primary mb-3 pt-2">Advertise your job with us</h5>
                                                                <span class="text-light"> Starting from</span>
                                                                <h3 class="text-white my-3">$99 <small>/mo</small></h3>
                                                                <p class="text-primary p-2 small text-white">Save 30% for new customer</p>
                                                                <a class="btn btn-light btn-sm" href="post-a-job.html">Post a job now!</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Employer <i class="fas fa-chevron-down fa-xs"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="employer-grid.html">Employer Grid</a></li>
                                                <li><a class="dropdown-item" href="employer-listing.html">Employer list</a></li>
                                                <li><a class="dropdown-item" href="employer-detail.html">Employer detail</a></li>
                                                <li><a class="dropdown-item" href="employer-listing-map.html">Employer Listing Map</a></li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item dropdown-toggle" href="javascript:void(0)">Dashboard <i class="fas fa-chevron-right fa-xs"></i></a>
                                                    <ul class="dropdown-menu left-side">
                                                        <li><a class="dropdown-item" href="dashboard-employer.html">Dashboard</a></li>
                                                        <li><a class="dropdown-item" href="dashboard-employer-my-profile.html">Profile</a></li>
                                                        <li><a class="dropdown-item" href="dashboard-employer-change-password.html">Change Password </a></li>
                                                        <li><a class="dropdown-item" href="dashboard-employer-manage-candidates.html">Manage Candidates</a></li>
                                                        <li><a class="dropdown-item" href="dashboard-employer-manage-jobs.html">Manage Jobs</a></li>
                                                        <li><a class="dropdown-item" href="dashboard-employer-post-new-job.html">Post New Job</a></li>
                                                        <li><a class="dropdown-item" href="dashboard-employer-pricing.html">Pricing</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown active">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Candidates <i class="fas fa-chevron-down fa-xs"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="candidates-grid.html">Candidates Grid</a></li>
                                                <li><a class="dropdown-item" href="candidats">Candidates list</a></li>
                                                <li class="active"><a class="dropdown-item" href="detail">deatail candidat</a></li>
                                                <li><a class="dropdown-item" href="candidates-listing-map.html">Candidates Listing Map</a></li>
                                                <li class="dropdown-submenu">

                                                <li><a class="dropdown-item" href="create_profil">Profile</a></li>
                                                <li><a class="dropdown-item" href="change-password">Change Password </a></li>
                                                <li><a class="dropdown-item" href="posts">post un article</a></li>
                                                <li><a class="dropdown-item" href="dashboard-candidates-manage-jobs.html">Manage Jobs</a></li>
                                                <li><a class="dropdown-item" href="dashboard-candidates-saved-jobs.html">Saved Jobs</a></li>
                                                <li><a class="dropdown-item" href="dashboard-candidates-pricing.html">Pricing</a></li>

                                                </li>
                                                <li><a class="dropdown-item" href="my-resume.html">My Resume <span class="badge badge-danger ml-2">CV</span></a></li>
                                            </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="my-resume.html">My Resume <span class="badge badge-danger ml-2">CV</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="add-listing">
                                    <div class="login d-inline-block mr-4">
                                        <a href="login.html" data-toggle="modal" data-target="#exampleModalCenter"><i class="far fa-user pr-2"></i>Sign in</a>
                                    </div>
                                    <a class="btn btn-white btn-md" href="post-a-job.html"> <i class="fas fa-plus-circle"></i>Post a job</a>
                                </div>
                            </div>
                        </nav>


                </li>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>


        </nav>
        <section class="header-inner header-inner-big bg-holder text-white" style="background-image: url(images/bg/banner-01.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="job-search-field">
                            <div class="job-search-item">
                                <form class="form row">
                                    <div class="col-lg-5 col-md-4">
                                        <div class="form-group left-icon mb-md-0">
                                            <input type="text" class="form-control" name="job_title" placeholder="
Quoi?">
                                            <i class="fas fa-search"></i> </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group left-icon mb-md-0">
                                            <input type="text" class="form-control" name="job_title" placeholder="
Où?">
                                            <i class="fas fa-search"></i> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="form-group form-action mb-0">
                                            <button type="submit" class="btn btn-primary mt-0"><i class="fas fa-search-location"></i>
                                                Trouver un candidat</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <main class="py-4">
            @yield('content')




        </main>
    </div>
</body>
</html>
