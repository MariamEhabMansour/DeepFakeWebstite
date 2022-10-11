<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mask - Authentication </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/try1.png" type="image/x-icon">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body>

        <div class="container-fluid position-relative nav-bar m-5 " >
            <div class="container position-relative "  >
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top py-3 py-lg-0 pl-3 pl-lg-3  ">
                    <a href="" class="navbar-brand mx-5">
                        <h1 class="m-0 display-5 text-white"><img src="img/MaskLogo.png" class="pb-3 pr-0 pl-0" alt="" height="60px" width="70px" style=""><span class="text-primary" style="color: white;">M</span>ASK</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center px-3 mr-auto mt-2 mt-lg-0" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0 my-2 my-lg-0 text-center mx-3">

                            <a href="/" class="nav-item nav-link ">Home</a>
                          @guest

                            <a href="login" class="nav-item nav-link ">Generator</a>

                          @else
                          <a href="generator" class="nav-item nav-link ">Generator</a>
                         @endguest



                            <a href="service" class="nav-item nav-link ">Service</a>
                            <div class="mt-4 ">
                                @guest
                                <a class="btn btn-primary text-white " type="button" role="button" aria-pressed="true" href="{{ route('login') }}" >{{ __('Login  ') }}</a>
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
        <main class="py-4 logPage">
            @yield('content')
        </main>
    </div>
</body>
</html>
