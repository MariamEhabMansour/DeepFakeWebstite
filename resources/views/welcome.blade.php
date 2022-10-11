{{-- @extends('layouts.app')

@section('content')
<div class="container " style="margin-top: 6%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light">
                 <div class="card-header bg-light">{{ __('Dashboard') }}</div>
                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/maskLogo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <title>MASK | Home</title>
</head>

<body>
    {{-- <div class="container-fluid bg-dark mb-5">
        <div class="row">
            <h1 class="text-white">you are login now</h1>
        </div>
    </div> --}}
    <div class="container-fluid position-relative nav-bar m-5 mt-5">
        <div class="container position-relative "  >
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top py-3 py-lg-0 pl-3 pl-lg-3  ">
                <a href="/" class="navbar-brand mx-5">

                    <h1 class="m-0 display-5 text-white"><img src="img/MaskLogo.png" class="pb-3 pr-0 pl-0" alt="" height="60px" width="70px" style=""><span class="text-primary" style="color: white;">M</span>ASK</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center px-3 mr-auto mt-2 mt-lg-0" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0 my-2 my-lg-0 text-center mx-3">

                        <a href="/" class="nav-item nav-link active">Home</a>
                      @guest

                        <a href="login" class="nav-item nav-link ">Generator</a>

                      @else
                      <a href="generator" class="nav-item nav-link ">Generator</a>
                     @endguest



                        <a href="service" class="nav-item nav-link ">Service</a>
                        <div class="mt-4 ">
                            @guest
                            <a class="btn btn-primary text-white   " type="button" role="button" aria-pressed="true" href="{{ route('login') }}" >{{ __('Login  ') }}</a>
                            @if (Route::has('register'))
                            <a class="btn btn-light  " href="{{ route('register') }}">{{ __('Sign up') }} </a>


                     @endif
                     @else
                     <a class="btn btn-primary text-white" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                  <i class="fas fa-sign-out-alt"></i>

                      {{ __('Logout') }}</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                      @endguest
                        </div>

                    </div>
                </div>

            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<div class="container-fluid p-0 " style="margin-top: 1%">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active"><img class="w-100" src="img/Untitled1.png" alt="website template image">
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width:800px;">
              <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">DEEPFAKE TECHNOLOGY</h4>
              <h3 class="display-3 text-white mb-md-4">voice and video generator</h3>
              @guest
              <a href="/login" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4 text-white">Start Using Deepfake</a>

            @else
              <a href="/generator" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4 text-white">Start Using Deepfake</a>
            @endguest
            </div>
          </div>
        </div>
        <div class="carousel-item"><img class="w-100" src="img/Untitled1.png" alt="website template image">
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-5" style="max-width:800px;">
              <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">DEEPFAKE TECHNOLOGY</h4>
              <h3 class="display-4 text-white mb-md-4">Secure, Fast and Easy to use</h3>
              <a href="/service" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4 text-white">Learn More</a></div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
      <div class="btn btn-primary" style="width:45px;height:45px;"><span class="carousel-control-prev-icon mb-n2"></span></div>
      </a> <a class="carousel-control-next" href="#header-carousel" data-slide="next">
      <div class="btn btn-primary" style="width:45px;height:45px;"><span class="carousel-control-next-icon mb-n2"></span></div>
      </a></div>
  </div>



    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3 mt-5">
                        <i class=" display-1 font-weight-normal text-secondary mb-3"><i class="fas fa-play"></i></i>

                        <h4 class="display-3 mb-3"></h4>
                        <h1 class="m-0">Deepfake online app</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title">Have you ever wanted to be someone else or someone else to be someone else?</h1>
                    <p>The site allows you to switch the face of a person in a video with the face of another person, or put words on a voice of your choice.</p>
                    <div class="row py-2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5 mt-5 " >
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Mask Services</h6>
                    <h1 class="mb-4 section-title"> Complete features only with a click of a button</h1>
                    <p class="mb-4">Our models are trained to let you create deepfake videos and audio files.
                    They use Deep Learning algorithms to absorb the various complexities of face and voice characteristics.

                    </p>
                    <a href="service" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class=" display-3 font-weight-normal text-primary mb-3"><i class="fas fa-check-circle"></i></h3>
                            <h5 class="mb-3">Cloud Software</h5>
                            <p class="m-0">Deepfakes App is online deepfake software that works in the cloud. All you need to do is upload videos and click a button, our app does the rest.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class=" display-3 font-weight-normal text-primary mb-3"><i class="fas fa-recycle"></i></h3>
                            <h5 class="mb-3">Reuse model</h5>
                            <p class="m-0"> This allows you to improve the face swapping quality of the results, or make additional videos without re-training a model.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class=" display-3 font-weight-normal text-primary mb-3"><i class="fas fa-key"></i></h3>
                            <h5 class="mb-3">Private</h5>
                            <p class="m-0">Only you have access to your data, videos and images. We do not share information with any 3rd parties or publish your videos in any way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-light mt-5" >
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                    <h1 class="mb-4 section-title">Deepfake App for voice and video generation using AI</h1>
                    <p>
                      Deepfake technology has great potential in entertainment, gaming, satire and culture when used responsibly.
                      We provide couble of features that are helpful when creating a deepfake video or audio,
                      we aim to help you have the best experience when using our website.
                      Our website allows anyone to create a high quality deepfake without any cost.
                    </p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Visible Watermarks</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Completely for free</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>High quality</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Report problems</h5></li>
                    </ul>
                    @guest

                    <a href="login" class="btn btn-primary mt-3 py-2 px-4">Try It Now</a>

                  @else
                  <a href="generator" class="btn btn-primary mt-3 py-2 px-4">Try It Now</a>
                 @endguest


                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-80" src="img/-deepfake.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
    <!-- Example start -->
    <div class="container-fluid py-5" id="example">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Examples</h6>
                    <h1 class="mb-4">Some Of Our voice and video deepfake examples</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">Video examples</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">Voice examples</li>

                    </ul>
                </div>
            </div>
            <div class="row mx-1 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first ">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/images (5).jpg" alt="">

                        </div>
                        <div class="portfolio-text bg-dark d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Video example</h4>
                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="img/images (5).jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first ">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/images.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-dark d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Video example</h4>
                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="img/images.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item ">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/images (1).jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-dark d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Video example</h4>
                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="img/images (1).jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first ">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/images (4).jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-dark d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Video example</h4>
                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="img/images (4).jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first ">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/images (3).jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-dark d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Video example</h4>
                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="img/images (3).jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second ">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/download.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-dark d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">voice example</h4>
                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="img/download.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example End -->

    <!-- tools Start -->
    <div class="container-fluid py-5 bg-light " style="margin-top:150px ">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-1">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our targets</h6>
                    <h1 class="mb-1">Creative tools perfect for every type of content creator</h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="wrap services-wrap" id="services">
                    <section class="grid grid-pad services">

                        <div class="col-lg-3 col-sm-6 service-box service-1" >
                            <div class="content">
                                <div class="service-icon">
                                    <i class="circle-icon  fab fa-instagram"></i>

                                </div>
                                <div class="service-entry">
                                    <h3>Influencers</h3>
                                    <p>Grow your social media following with captivating Facebook, Instagram, and Twitter
                                     posts and blog visuals</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6  service-box service-2" >
                            <div class="content">
                                <div class="service-icon">
                                    <i class="circle-icon fas fa-chalkboard-teacher" style="width:42%"></i>

                                </div>
                                <div class="service-entry">
                                    <h3>Educators</h3>
                                    <p>Complement lesson plans with beautiful educational audios and videos to
                                     engage your students.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6  service-box service-3">
                            <div class="content">
                                <div class="service-icon">
                                    <i class="circle-icon fas fa-lightbulb"></i>
                                </div>
                                <div class="service-entry">
                                    <h3>Startups</h3>
                                    <p>Scale your business quickly with dynamic ads, videos, and audios across all
                                    levels of your marketing funnel.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6  service-box service-4" >
                            <div class="content">
                                <div class="service-icon">
                                    <i class="circle-icon fas fa-book-open"></i>

                                </div>
                                <div class="service-entry">
                                    <h3>Writers</h3>
                                    <p> Writers so that they can preserve and publish audio and video copies of their
                                    books by themselves.</p>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

                </div>
            </div>

    <!-- tools End -->


    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-7 py-5 pr-md-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonials</h6>
                    <h1 class="mb-4 section-title">What Our Clients Say</h1>
                    <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h5>Client Name</h5>
                                    <i>Profession</i>
                                </div>
                            </div>
                            <p>Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor  lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h5>Client Name</h5>
                                    <i>Profession</i>
                                </div>
                            </div>
                            <p class="m-0">Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor  lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/speech-to-text-healthcare-1024x576.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



<!-- video intro start -->
<div class="container-fluid bg-light pt-1">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-3 text-center mb-3 ">
          <h6 class="text-primary font-weight-normal text-uppercase mb-0">Demonstration Videos</h6>
          <h1 class="mb-2"> MASK help you save time, cut costs and simplify your workflow.</h1>
          <hr>

          <video   controls  style="border-radius: 3%; " class=" justify-content-center text-center mt-5">
            <source src="img/vid_exemple_3_liveNEW.mp4" type="video/mp4"  >

          </video>

        </div>

      </div>



        </div>
      </div>

<!-- video intro End -->



<!-- service start -->
    <div class="container py-5 ">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 col text-center mb-1">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our service</h6>
                    <h1 class="mb-1">What you get in MASK website</h1>
                    <hr>
                </div>
            </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="col-lg-4 col-sm-6 float-left mb-5 ">
                        <div class="text-center p-5 bg-light" style="border: black dashed;">
                        <div class=" mb-4">
                            <i class="fas fa-globe text-primary text-center" style="font-size: 70px;"></i>
                        </div>
                        <h3 class="mt-4 mb-4">Online Video Maker</h3>
                        <p>Mask works in your browser — no need to download anything to your device. It's not only faster but also more secure.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 float-left mb-5 ">
                        <div class="text-center p-5 bg-light" style="border: black dashed;">
                        <div class=" mb-4">
                            <i class="fas fa-photo-video text-primary text-center" style="font-size: 70px;"></i>
                        </div>
                        <h3 class="mt-4 mb-4">Works on Any Format</h3>
                        <p>You won't be lost in thought of what file type to choose for the video as the tool works with all the audio and video formats.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 float-left mb-5 ">
                        <div class="text-center p-5 bg-light" style="border: black dashed;">
                        <div class=" mb-4">
                            <i class="fas fa-laptop text-primary text-center" style="font-size: 70px;"></i>
                        </div>
                        <h3 class="mt-4 mb-4">Works on Any Device</h3>
                        <p>No matter what you're using: Mac or Windows computer, iPhone or Android phone — the cloud based solution will work perfectly.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 float-left mt-5 ">
                        <div class="text-center p-5 bg-light" style="border: black dashed;">
                        <div class=" mb-4">
                            <i class="fas fa-star text-primary text-center" style="font-size: 70px;"></i>
                        </div>
                        <h3 class="mt-4 mb-4">Easy-to-use Interface</h3>
                        <p>The interface of the tool is intuitive so you don't need any experience in video editing to use it.</p>
                    </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 float-left mt-5 ">
                        <div class="text-center p-5 bg-light" style="border: black dashed;">
                        <div class=" mb-4">
                            <i class="fas fa-user-shield text-primary text-center" style="font-size: 70px;"></i>
                        </div>
                        <h3 class="mt-4 mb-4">Files are Protected</h3>
                        <p>Site provides you with the necessary protection and privacy in the direction of the videos and voice.</p>
                    </div>
                    </div>


                    <div class="col-lg-4 col-sm-6 float-left mt-5 ">
                        <div class="text-center p-5 bg-light" style="border: black dashed;">
                            <div class=" mb-4">
                                <i class="fas fa-theater-masks text-primary text-center" style="font-size: 70px;"></i>
                            </div>
                            <h3 class="mt-4 mb-4">Visible Watermarks</h3>
                            <p>Every video has visible watermark indicated that the video is a deepfake. it's easy to identify as fake.</p>

                        </div>

                    </div>





                </div>
            </div>
          </div>

<!-- service End -->









    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5 mt-5">

            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center pt-5 bg-dark">

              <!-- Grid column -->
              <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="/" >Home</a>
                </h6>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    @guest
                    <a href="login" > generator</a>
                    @else
                    <a href="generator" > generator</a>
                    @endguest

                  </h6>


            </div>
              <!-- Grid column -->



              <!-- Grid column -->
              <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="service" >Service</a>
                </h6>
              </div>
              <!-- Grid column -->
              <!-- Grid column -->
              <div class="col-md-2">

                <h6 class="text-uppercase font-weight-bold">
                    <a href="policy"> privacy policy </a>

                  </h6>

            </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">



                    @guest
                    <a href="login" >Login</a>
             @else
             <a class=" " href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt"></i>

              {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              @endguest

                </h6>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row-->
          </section>
          <!-- Section: Links -->
                <hr class="text-light ">
          <hr class="my-5" />

          <!-- Section: Text -->
          <section class="mb-5">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <p>
                  We propose an application that leverages the power of deepfake algorithms to extract an accurate model of an individual and generate new content especially designed for benign use.
                </p>
              </div>
            </div>
          </section>
          <!-- Section: Text -->

          <!-- Section: Social -->
          <section class="text-center mb-3">
             <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" ><i  class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" ><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
          </section>
        </div>
        <div class="bg-dark">
            <div class="container border-top border-secondary pt-3 bg-dark">
                <p class="m-0 text-center text-white ">
                     <a class="text-white font-weight-bold" href="/"> &copy; Mask.</a> All Rights Reserved.

                </p>
            </div>
        </div>



    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
