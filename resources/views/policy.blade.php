<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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






    <div class="container  ">
        <div class="row ">
            <div class="col-12"  style="margin-top: 7%">

               <h3 class="text-primary"> PRIVACY POLICY </h3>
            </div>
            <div class="col-12 mt-5">
                <h4>1. Definitions of Personal Information</h4>
                <p> mask.com (hereinafter called “Company”) recognizes that “Personal Information” is information relating to a living individual set forth in the applicable laws on protection of personal information (name, date of birth or any other personally identifiable information), information used in connection with a specific individual such as e-mail address, user ID, password or credit card, and information relating to individual attributes coupled with personal information such as his/her hobbies, family structure or age.</p>
            </div>

            <div class="col-12 mt-4">
                <h4>2. Purposes of Use of Personal Information</h4>
                <p>Company specifies or identifies purposes of use (hereinafter called the “Purposes of Use”) of Personal Information as much as possible in handling such information.</p>
            </div>


            <div class="col-12 mt-4">
                <h4>3. Cookies and IP address information</h4>
                <p>Company uses “Cookies” so that our website (hereinafter called the “Site”) can normally functions.

                    “Cookie” is information to be stored by browsers in computers used by users of the Site (hereinafter called “User”). Company uses various kinds of cookies for different purposes.
                    a. Functional cookies：They are cookies necessary for the Site to properly function and include cookies needed for creation of user accounts.
                    b. Analytical cookies：They are cookies to acquire information about how User is using (part of) the Site. With those cookies, Company can improve the Site and make the contents of the Site meet or satisfy matters of concern of User or important matters as much as possible. Company uses data acquired by cookies only for analyzing usage situation of the Site by User.

                    Company uses cookies of third parties only for improving quality and effectiveness of the Site.For example, Company uses “Google Analytics” set in a privacy-conscious way. Google Analytics is a tool for processing IP addresses on behalf of Company.

                    On most browsers, cookies are enabled by default. By changing the settings of browsers, User can disable cookies or display cookies at the time of sending them. However, if any cookie is disabled, the functions or services provided on the Site or any other websites may not normally function.</p>
            </div>


            <div class="col-12 mt-4">
                <h4>4. Restrictions on use of Personal Information</h4>
                <p>Company does not handle Personal Information of User beyond the scope necessary to achieve the Purposes of Use without prior consent of such User. Even if Company acquires Personal Information of User through merger or for other reasons, Company does not handle such Personal Information beyond the scope of the Purposes of Use before business succession without prior consent of such User. However, Company can handle Personal Information beyond the scope of the Purposes of Use without prior consent of User in any of the following cases.
                    (1) If such handling is based on applicable laws and regulations;
                    (2) If such handing is necessary for protection of human life, body or properties and it is difficult for Company to obtain prior consent of User;
                    (3) If such handling is necessary for improving public health or promoting sound development of children and it is difficult for Company to obtain prior consent of User; or
                    (4) If Company is required to cooperate with government or local government agencies or their contractors relating to their performance of services or clerical work set forth in applicable laws and regulations and obtaining prior consent of User may interfere with such performance.</p>
            </div>


            <div class="col-12 mt-4">
                <h4>5. Appropriate acquisition of Personal Information</h4>
                <p>Company properly acquires Personal Information and does not acquire it by fraudulent or other wrongful means. Company keeps in mind that it does not collect Personal Information of children under the age of 15 without prior consent of their parents or natural guardians.</p>
            </div>



            <div class="col-12 mt-4">
                <h4>6. Notification of Purposes of Use in acquiring Personal Information </h4>
                <p>Company publicly discloses the Purposes of Use of Personal Information of User in acquiring such information, except for in any of the following cases.
                    (1) If any notification to User or public disclosure of the Purposes of Use may impair life, body, properties or any of their rights or interests of such User or any third party;
                    (2) If any notification to User or public disclosure of the Purposes of Use may impair rights or legitimate interests of Company;
                    (3) If Company is required to cooperate with government or local government agencies or their contractors relating to their performance of services or clerical work set forth in applicable laws and regulations and notification to User or public disclosure of the Purposes of Use may interfere with such performance; or
                    (4) If Company considers that the Purposes of Use are obvious on the basis of the situation where such Personal Information is acquired.

                    </p>
            </div>


            <div class="col-12 mt-4">
                <h4>7.Change to the Purposes of Use of Personal Information</h4>
                <p>If Company makes any change to the Purposes of Use of Personal Information, Company does not make such change beyond the scope which is reasonably considered to be reasonably associated with the Purposes of Use before such change. Company notifies User of such changed Purposes of Use or publicly disclose such Purposes of Use.</p>
            </div>


            <div class="col-12 mt-4">
                <h4>8. Security management of Personal Information and supervision over employees</h4>
                <p>Company establishes regulations on protection of Personal Information and exercises necessary and appropriate supervision over its employees for security management of Personal Information such as prevention of its leakage, loss or damage.

                </p>
            </div>




            <div class="col-12 mt-4">
                <h4>9. Supervision over contractors</h4>
                <p>
                    If Company entrusts any contractor to handle all or any part of Personal Information, Company executes an agreement with such contractor including confidentiality agreement or requests such contractor to agree to the terms and conditions stipulated by Company and exercises necessary and appropriate supervision over such contractor in order to ensure security management of Personal Information by such contractor.

                    </p>
            </div>


            <div class="col-12 mt-4">
                <h4>10. Restrictions on provision of Personal Information to third parties</h4>
                <p>
                    Company does not provide Personal Information of User without prior consent of such User, except for in any of the following cases.
                    (1) If such provision is based on applicable laws and regulations;
                    (2) If such provision is necessary for protection of human life, body or properties and it is difficult for Company to obtain prior consent of User;
                    (3) If such provision is necessary for improving public health or promoting sound development of children and it is difficult for Company to obtain prior consent of User;
                    (4) If Company is required to cooperate with government or local government agencies or their contractors relating to their performance of services or clerical work set forth in applicable laws and regulations and obtaining prior consent of User may interfere with such performance; or
                    (5) If Company notifies User of or publicly discloses the following matters in advance.
                    1. The Purposes of Use of Personal Information include its provision to third parties;
                    2. Data items to be provided to third parties;
                    3. Means or methods of such provision to third parties; and
                    4. Company suspends provision of Personal Information of User upon request of such User.
                    However, in any of the following cases, the provision of Personal Information does not fall under the provision to third parties set forth in the preceding paragraph.
                    (1) If Company entrusts any third party to handle all or any part of Personal Information within the scope necessary to achieve the Purposes of Use;
                    (2) If Company provides Personal Information to any third party in connection with its business succession due to merger or other reasons; or
                    (3) If Company uses Personal Information of User jointly with any specific persons and Company notifies such User of or causes such User to easily know in advance such joint use, items of Personal Information to be jointly used, scope of persons who jointly use it, Purposes of Use of such persons and names of persons responsible for management of such Personal Information.</p>
            </div>



            <div class="col-12 mt-4">
                <h4>11. Public disclosure of matters relating to Personal Information</h4>
                <p>
                    If User requests Company to disclose his/her Personal Information, Company discloses it to such User without delay. However, if such disclosure falls under any of the following cases, Company may not disclose all or any part of such Personal Information. If Company determines not to disclose it, Company notifies such User of such determination without delay.
                    (1) If such disclosure may impair life, body, properties or any other rights or interests of such User or any third party;
                    (2) If such disclosure may significantly interfere with proper business operation of Company; or
                    (3) If such disclosure violates applicable laws and regulations;
                    In principle, Company does not disclose any information other than Personal Information such as access log.

                    </p>
            </div>



            <div class="col-12 mt-4">
                <h4>12. Rights of User in EU (European Union) region</h4>
                <p>
                    If any processing of personal data of User is based on consent of such User, such User can, at any time, withdraw such consent relating to his/her personal data.
                    User has a right to request for access to his/her personal data possessed by Company. By exercising such right, User can receive a copy of his/her personal data in the possession of Company.
                    User has a right to request for correction of his/her personal data possessed by Company. By exercising such right, User can correct any incomplete or inaccurate data relating to him/herself.
                    User has a right to request for deletion of his/her personal data possessed by Company. By exercising such right, User can delete his/her personal data which Company continues to process without justifiable reasons.
                    User has a right to make an objection against Company in relation to processing of his/her personal data conducted by Company for its legitimate interests. If Company processes personal data for direct marketing, Company always accepts such objection. If Company processes it for any other purposes, Company ceases such processing, except for in either of the following cases. (i)If Company has any inevitable and justifiable reason which prevails over the interests, rights or freedom of such User; or (ii)If Company has any inevitable and justifiable reason in connection with commencement or execution of legal actions or proof of claim.
                    User has a right to request for restricting or limiting processing of his/her personal data.
                    User has a right to request for transfer of his/her personal data to him/herself or any third party. Company provides such personal data in a structured, generally used and machine-readable format to such User or any third party designated by such User. However, please note that this right applies only to the automatically processed information for which Company obtains prior consent from such User or which Company uses for its performance of the agreement with such User.
                    User can exercise any of the above rights free of charge. Company immediately provides to User the information about the status of its response to a request from such User or, in any event, provides such information to such User within one (1) month after receiving such request. The period of such response may be further extended for two (2) months, depending on complexity or number of requests. If such period is extended, Company notifies such User of such extension within one (1) month after receiving such request.
                    If any request from User is obviously groundless or excessive, in particular, if User repeatedly makes such requests, Company may charge such User reasonable expenses for such requests or refuse to respond to such requests.
                    In addition to the above rights, User has a right to file a complaint at any time to supervisory authorities (in particular, supervisory authorities of residence place or workplace of such User or of any EU member country where a breach of GDPR (General Data Protection Regulation) occurs. However, Company kindly asks User to give prior notice to Company before such User contacts with such supervisory authorities so that Company can have an opportunity to respond to such complaint.</p>
            </div>



            <div class="col-12 mt-4">
                <h4>13. Correction of Personal Information</h4>
                <p>
                    If User requests Company to make corrections of or additions to or delete (hereinafter collectively called the “Corrections”) his/her Personal Information by reason of its untruth, Company conducts necessary investigations without delay to the extent necessary to achieve the Purposes of Use and makes the Corrections of the details of such Personal Information on the basis of the results of such investigations and notifies such User of such Corrections, unless applicable laws and regulations stipulate special procedures for such Corrections.</p>
            </div>



            <div class="col-12 mt-4">
                <h4>14. Suspension of use of Personal Information</h4>
                <p>
                    If User requests Company to suspend the use of or erase his/her Personal Information (hereinafter collectively called the “Suspension of Use”) by reason of such information being handled beyond the scope of the Purposes of Use which are publicly disclosed in advance or by reason of such information being acquired by fraudulent or other wrongful means, Company conducts necessary investigations without delay and conducts the Suspension of Use of such Personal Information on the basis of the results of such investigations and notifies such User of such Suspension of Use. However, in the case where such Suspension of Use requires considerable expenses or it is difficult for Company to conduct such Suspension of Use for other reasons, if Company can take alternative measures necessary to protect the rights and interests of such User, Company takes such measures.

                    </p>
            </div>



            <div class="col-12 mt-4">
                <h4>15. Explanation of reasons</h4>
                <p>
                    Despite a request from User, if Company decides any of the following matters, Company strives to explain the reasons for such decision to such User in notifying such User of such decision.
                    (1) Company does not notify such User of the Purposes of Use of his/her Personal Information;
                    (2) Company does not disclose all or any part of such Personal Information;
                    (3) Company does not conduct the Suspension of Use of such Personal Information; or
                    (4) Company does not suspend or cease the provision of such Personal Information to third parties.

                    If you have any questions or inquiries about our Privacy Policy, please feel free to contact us at the following e-mail address: maskwebsite5@gmail.com

                    </p>
            </div>



            <div class="col-12 mt-4">
                <h4></h4>
                <p></p>
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
                <a href="login" >generator</a>
                @else
                <a href="generator" >generator</a>
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
                <a href="/policy" >Privacy Policy</a>
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
                 <a class="text-white font-weight-bold" href="#"> &copy; mask.</a> All Rights Reserved.

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
