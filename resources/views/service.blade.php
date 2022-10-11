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
    <title>MASK website-service</title>

</head>

<body>
    <div class="container-fluid position-relative nav-bar m-5">

        <div class="container position-relative m-5" style="z-index: 9;" >
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



                        <a href="service" class="nav-item nav-link active">Service</a>
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

<!-- Start FAQ Intro -->

    <section class="accordion-section clearfix mt-3" aria-label="Question Accordions" >


            <div class="container" style="margin-top: 200px">
                <div class="text-center mb-5">
                <h1>Frequently Asked Questions</h1>
                <hr>
                <p class="lead">Here You Will Find All Questions You Are Searching For And The Full Knowledgebase</p>

            </div>

            <div class="panel-group " id="accordion" role="tablist" aria-multiselectable="true"  style="margin-top: 100px">
              
              <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                  <h3 class="panel-title">
                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                        What is Deepfake technology?<i class="fas fa-chevron-down float-right" style="float"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                  <div class="panel-body px-3 mb-4">
                    <p>The term "deepfake" comes from the underlying technology "deep learning," which is a form of AI. Deep learning algorithms, which teach themselves how to solve problems when given large sets of data, are used to swap faces in video and digital content to make realistic-looking fake media. The main ingredient in deepfakes is machine learning, which has made it possible to produce deepfakes much faster at a lower cost.
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                  <h3 class="panel-title">
                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                        What caused us to build this website? <i class="fas fa-chevron-down float-right" style="float"></i>
                    </a>

                  </h3>
                </div>
                <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                  <div class="panel-body px-3 mb-4">
                    <p>Unease has settled around evolving deepfake technologies that make it possible to create evidence of scenes that never happened. Celebrities have found themselves the unwitting stars of fake video, and politicians have turned up in videos appearing to speak words they never really said.
                    </p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                  <h3 class="panel-title">
                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        What differentiates us from other websites?<i class="fas fa-chevron-down float-right" style="float"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                  <div class="panel-body px-3 mb-4">
                    <p>Many people wanted to use deepfake techniques, but with the necessary protection conditions, and some wanted to use them for entertainment, but it was not available for free, so we decided to work on this technology and show it to you in a safer and completely free way, so we made protection on all private videos and audio clips With the presence of a watermark, everyone knows that this is a modified video.  </div>
                    </p>
                  </div>
                </div>
              </div>

              

              <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                  <h3 class="panel-title">
                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                        Can I make a video of any content? <i class="fas fa-chevron-down float-right" style="float"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                  <div class="panel-body px-3 mb-4">
                    <p>We do not allow illegal, harmful or offensive content to be uploaded to our service. For more information, please refer to our content policy. Although the video is checked for inappropriate content by AI during the upload process, it is not guaranteed that passing this check is in accordance with the content policy and terms of use of this service.

                        Synthesizing images without permission may be an infringement of copyright. Please check Individual terms and conditions regarding infringement of intellectual property rights and Copyright Infringement Warning.</div>
                      </p>
                  </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                            <i class="fas fa-chevron-down float-right" style="float"></i>
                            What can cause a video creation to fail?
                        </a>
                      </h3>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                      <div class="panel-body px-3 mb-4">
                      
                        <p>
                            There are two main causes why video creations fail. <br><br>
                            1. The system couldn't detect enough faces for training
                            The creation needs to recognize faces from videos and images. But if AI could not detect enough faces from the learning data, the creation will be cenceled.
                            Since blurred or ambiguous faces are excluded in the process of learning, please upload the learning data with better reflection and try again.
                            <br><br>
                            2. Time out
                            If it takes an unexpectedly long time to create a video, the creation will be canceled.
                            Please change the video you are trying to swap to a shorter one, or reduce the size of the video and try again.
                          </p>
                      </div>
                    </div>
                  </div>
                  


                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading5">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                            How to use the video generator? <i class="fas fa-chevron-down float-right" style="float"></i>
                               </a>
                      </h3>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                      <div class="panel-body px-3 mb-4">
                        <p>    You only need three steps to create a fake video, which is to send audio, video and audio that are combined together.
                        </p>
                      </div>
                    </div>

              </div>


              


              <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading7">
                  <h3 class="panel-title">
                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                      How to use the voice generator?<i class="fas fa-chevron-down float-right" style="float"></i>
                     </a>
                  </h3>
                </div>
                <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                  <div class="panel-body px-3 mb-4">
                    <p>   You only need two steps to create a fake voice, which is to enter a voice and enter the words you want to convert into a fake voice.</div>
                    </p>
                  </div>
                </div>
              

                <div class="panel panel-default">
                  <div class="panel-heading p-3 mb-3" role="tab" id="heading9">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
                          Can I make a video of any content?<i class="fas fa-chevron-down float-right" style="float"></i>
                      </a>
                    </h3>
                  </div>
                  <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                    <div class="panel-body px-3 mb-4">
                      <p>  We do not allow illegal, harmful or offensive content to be uploaded to our service. For more information, please refer to our <a href="/policy"> content policy.</a> Although the video is checked for inappropriate content by AI during the upload process, it is not guaranteed that passing this check is in accordance with the content policy and terms of use of this service.
                        Synthesizing images without permission may be an infringement of copyright.  </p>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading p-3 mb-3" role="tab" id="heading10">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                          How can I improve the quality of retults?<i class="fas fa-chevron-down float-right" style="float"></i>
                        </a>
                    </h3>
                  </div>
                  <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                    <div class="panel-body px-3 mb-4">
                      <p>   
                          1. Regarding the video you want to swap the face)
                          In the video, only the target person should appears with high precision, without blurring, moving and the subject is facing the front.
                          2. Regarding the video (or images) for training the model)
                          Use a video (or image) in which only the target person appears with high precision and without blurring. Also, it is better to have variations in the expressions and facial angles of person in the video. The video should be longer than 20 sec, and the number of images should be higher than 300. You can also combine videos and images.

                          The quality will improve by repeating learning with the same (or different) material several times.    </p>
                    </div>
                  </div>
                </div>



                <div class="panel panel-default">
                  <div class="panel-heading p-3 mb-3" role="tab" id="heading11">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                        Is it possible to create a faceswap video even if there are multiple people in the video?<i class="fas fa-chevron-down float-right" style="float"></i>
                      </a>
                    </h3>
                  </div>
                  <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                    <div class="panel-body px-3 mb-4">
                      <p>   Since the system attempts to recognize the every faces that appears in the video, it affects in a negative way to the learning or swapping.
                          In the video, only the target person should appears with high precision and without blurring as much as possible.
                        </p>
                    </div>
                  </div>
                </div>

                

          </div>
        </div>
      </section>



<!-- End FAQ Intro -->



<div class="container-fluid mt-5 mb-5" style="background-image: url('img/EPRS_STOA_ATAG_690046_What_If_Deepfakes_final (1).png'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; min-height: 330px;">
    <div class="row text-center d-flex justify-content-center"  style="background-color: rgba(0, 0, 0, 0.7);min-height:330px;">
        <div class="col-12">
            <div class="p-5 text-center "  style="  margin-top:20px">
                    <div class="text-white  text-center"  >
                           <h1 class="text-white">Have a video you think is inappropriate? </h1>
                           <div class="mt-5">

                            <p class="lead">
                             You can leave us a link of that vedio, we promise we'll take a look at it</p>
                             <p class="lead">
                                 You can send the link to us through our email</p>
                                 <p class="lead">
                                     maskwebsite5@gmail.com</p>
                           </div>
                          </div>
                </div>
              </div>
        </div>
    </div>
</div>


<div class="container-fluid bg-light" style="margin-top: 150px">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
            <h6 class="text-white font-weight-normal text-uppercase mb-3">Our Team</h6>
            <h1 class="mb-0 text-center">Meet Our Team Members</h1>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 p-0 py-sm-5">
          <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
            <div class="team d-flex flex-column text-center mx-3">
              <div class="position-relative"><img class="img-fluid w-100" src="img/fatma.jpeg" alt="website template image">
                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"><a class="btn btn-outline-primary text-center mr-2 px-0" style="width:38px;height:38px;" href=""><i class="fab fa-twitter"></i></a> <a class="btn btn-outline-primary text-center mr-2 px-0" style="width:38px;height:38px;" href=""><i class="fab fa-facebook-f"></i></a> <a class="btn btn-outline-primary text-center px-0" style="width:38px;height:38px;" href=""><i class="fab fa-linkedin-in"></i></a></div>
              </div>
              <div class="d-flex flex-column bg-secondary text-center py-3">
                <h5 class="text-white">Fatema Hany</h5>
                <p class="m-0">AI developer</p>
              </div>
            </div>
            <div class="team d-flex flex-column text-center mx-3">
              <div class="position-relative"><img class="img-fluid w-100" src="img/alaa.jpeg" alt="website template image">
                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"><a class="btn btn-outline-primary text-center mr-2 px-0" style="width:38px;height:38px;" href=""><i class="fab fa-twitter"></i></a> <a class="btn btn-outline-primary text-center mr-2 px-0" style="width:38px;height:38px;" href=""><i class="fab fa-facebook-f"></i></a> <a class="btn btn-outline-primary text-center px-0" style="width:38px;height:38px;" href=""><i class="fab fa-linkedin-in"></i></a></div>
              </div>
              <div class="d-flex flex-column bg-secondary text-center py-3">
                <h5 class="text-white">Alaa Nasser</h5>
                <p class="m-0">AI developer</p>
              </div>
            </div>
            <div class="team d-flex flex-column text-center mx-3">
              <div class="position-relative"><img class="img-fluid w-100" src="img/nour.jpeg" alt="website template image">
                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"><a class="btn btn-outline-primary text-center mr-2 px-0" style="width:38px;height:38px;" href=""><i class="fab fa-twitter"></i></a> <a class="btn btn-outline-primary text-center mr-2 px-0" style="width:38px;height:38px;" href=""><i class="fab fa-facebook-f"></i></a> <a class="btn btn-outline-primary text-center px-0" style="width:38px;height:38px;" href=""><i class="fab fa-linkedin-in"></i></a></div>
            </div>
              <div class="d-flex flex-column bg-secondary text-center py-3">
                <h5 class="text-white">Nourhan Alaa</h5>
                <p class="m-0">AI developer</p>
              </div>
            </div>
            <div class="team d-flex flex-column text-center mx-3">
              <div class="position-relative"><img class="img-fluid w-100" src="img/mariam.jpeg" alt="website template image">
                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"><a class="btn btn-outline-primary text-center mr-2 px-0" style="width:38px;height:38px;" href=""><i class="fab fa-twitter"></i></a> <a class="btn btn-outline-primary text-center mr-2 px-0" style="width:38px;height:38px;" href=""><i class="fab fa-facebook-f"></i></a> <a class="btn btn-outline-primary text-center px-0" style="width:38px;height:38px;" href=""><i class="fab fa-linkedin-in"></i></a></div>
            </div>
              <div class="d-flex flex-column bg-secondary text-center py-3">
                <h5 class="text-white">Mariam Ehab</h5>
                <p class="m-0">Web developer</p>
              </div>
            </div>

            <div class="team d-flex flex-column text-center mx-3">
                <div class="position-relative"><img class="img-fluid w-100" src="img/radwa.jpeg" alt="website template image">
                    <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"><a class="btn btn-outline-primary text-center mr-2 px-0" style="width:38px;height:38px;" href=""><i class="fab fa-twitter"></i></a> <a class="btn btn-outline-primary text-center mr-2 px-0" style="width:38px;height:38px;" href=""><i class="fab fa-facebook-f"></i></a> <a class="btn btn-outline-primary text-center px-0" style="width:38px;height:38px;" href=""><i class="fab fa-linkedin-in"></i></a></div>
                </div>
                <div class="d-flex flex-column bg-secondary text-center py-3">
                  <h5 class="text-white">Radwa Eid</h5>
                  <p class="m-0">Web developer</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>




    <!-- Footer Start -->
     <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5 mt-5">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 bg-dark">

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="" >Home</a>
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
                @guest
                <a href="login" >privacy policy</a>
                @else
                <a href="policy" >privacy policy</a>
                @endguest
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
                 <a class="text-white font-weight-bold" href="#">&copy; mask.</a> All Rights Reserved.

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
