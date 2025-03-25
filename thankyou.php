<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Kabini River Lodge</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/logos/favicon.webp" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-5.14.0.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">

 

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        <!-- main header -->
        <header class="main-header header-one">
            <!--Header-Upper-->
            <div class="header-upper  py-10 rpy-0">
                <div class="container-fluid clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="index.html">

<img src="assets/images/logos/logo.webp" alt="logo">

</a></div>
                        </div>

                        <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo">
                                    <a href="index.html">

                                    <img src="assets/images/logos/logo.webp" alt="logo">

                                    </a>
                                    </div>


                                </div>

                                <div class="navbar-collapse collapse  clearfix">
                                    <ul class="navigation clearfix">

                                        <li><a href="about.html">About Kabini</a></li>
                                        <li class="dropdown"><a href="#"> Accommodation</a>
                                            <ul>
                                                <li><a href="maharaja.html"> Maharaja Package</a></li>
                                                <li><a href="viceroy.html">Viceroy Package</a></li>
                                                <li><a href="tent.html">Tent Package</a></li>
                                                <li><a href="dormitory.html">Dormitory Package</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.html">Photo Gallery</a></li>
                                        <li><a href="things-to-do.html">Things To Do</a></li>
                                        <li><a href="reach.html">How To Reach</a></li>

                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-btns py-10">
                            <a href="booking.html" class="theme-btn style-two bgc-secondary">
                                <span data-hover="BOOK NOW">BOOK NOW</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <button class="bg-transparent">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>


        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

        <div id="mobileSidebar" class="sidebar pl-50">
            <div class="cross-icon"><span class="fa fa-times"></span></div>

            <div class="sidebar-header mt-30 mb-10">
                <h2 class="sidebar-title">  <img src="assets/images/logos/logo.webp" alt="logo"></h2>

            </div>

            <ul class="sidebar-navigation px-30">
                <li><a class="d-flex gap-4" href="about.html"><span><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span>About Kabini</span></a></li>


                <li class=" dropdown">
                    <a href="#" class="d-flex gap-4 align-items-center dropdown-toggle"><span><i
                                class="fas fa-hotel"></i></span>Accommodation</a>
                    <ul class="dropdown-menu pr-10 ">
                        <li><a href="maharaja.html"> Maharaja Package</a></li>
                        <li><a href="viceroy.html">Viceroy Package</a></li>
                        <li><a href="tent.html">Tent Package</a></li>
                        <li><a href="dormitory.html">Dormitory Package</a></li>
                    </ul>
                </li>
                <li><a class="d-flex gap-4" href="gallery.html"> <span><i class="fas fa-image    "></i></span>
                        <span>Photo Gallery</span></a></li>
                <li><a class="d-flex gap-4" href="things-to-do.html"><span><i class="fas fa-hiking    "></i></span><span>
                            Things To Do</span></a></li>
                <li><a class="d-flex gap-4" href="reach.html"> <i class="fas fa-route    "></i> How To Reach</a></li>
            </ul>

            <div class="bgc-black sidebar-info mt-15 mb-15 text-center pt-10 pb-10">
                <a href="tel:+919480022108"><i class="fa fa-phone" aria-hidden="true"></i>+91-9480022108</a>
            </div>


            <div class="sidebar-btns mx-auto d-flex justify-content-center">
                <a href="booking.html" class="theme-btn style-two bgc-secondary">
                    <span data-hover="BOOK NOW">BOOK NOW</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>

        </div>
         
        <!-- End Hidden Sidebar -->                
                                           
           <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {     
            $name = $_POST["name"];                        
            $email = $_POST["email"];                                     
            $number = $_POST["phone_number"];              
            $arrival = $_POST["arrival"];               
            $deperture = $_POST["departure"];          
            $adult = $_POST["adults"];                   
            $children = $_POST["children"];                               
            $message = isset($_POST["message"]) ? $_POST["message"] : '';
            
            $toAdmin = "book@kabiniriverresort.com";
            $subjectAdmin = "New Contact Form Submission";
            $headersAdmin = "From: $name <$email>";

            $messageAdmin = "Name: $name\n";
            $messageAdmin .= "Email: $email\n";
            $messageAdmin .= "Phone Number: $number\n";
            $messageAdmin .= "Arrival Date: $arrival\n";
            $messageAdmin .= "Deperture Date: $deperture\n";
            $messageAdmin .= "Adult Count: $adult\n";
            $messageAdmin .= "Children Count: $children\n";
            $messageAdmin .= "Message: $message\n";

            $adminEmailSent = mail($toAdmin, $subjectAdmin, $messageAdmin, $headersAdmin);

            // User's confirmation email details
            $userSubject = "Thank You for Contacting Kabini River Lodge";
            $userMessage = "Dear $name,\n\n";
            $userMessage .= "Thank you for contacting Kabini River Lodge. We have received your message and will get back to you shortly.\n\n";
            $userMessage .= "Best regards,\n";
            $userMessage .= "Kabini River Lodge";   

            $toUser = $email;
            $subjectUser = $userSubject;
            $headersUser = "From: Kabini River Lodge <book@kabiniriverlodge.com>";

            $userEmailSent = mail($toUser, $subjectUser, $userMessage, $headersUser);

            if ($adminEmailSent && $userEmailSent) {
                echo '
            <div style="margin: 0px; height: 80vh;" class="alert alert-success text-center m-0  pb-50 pt-150">
            <i class="fas fa-check-circle py-5" style="color: var(--gt-gradient-1); font-size: 120px;"></i>
            <p>Hello,' . htmlspecialchars($name) . ', Your message was sent successfully!</p>
            <p>Thank you for contacting us.</p>
            <a href="./" class="main-btn secondary-btn mt-30">Back To Home<i class="fas fa-paper-plane"></i></a>
            </div>';
            } else {
                echo '
            <div style="margin: 0px; height: 80vh;" class="alert alert-danger text-center m-0 pt-150">
            <i class="far fa-times-circle fa-lg" style="color: #ff0000; font-size: 120px;""></i>
            <p>Oops! Something went wrong. Please, try again later.</p>
            <a href="./" class="main-btn  secondary-btn mt-30">Back To Home<i class="fas fa-paper-plane"></i></a>
            </div>'; 
            
            }
        }
        ?>






      <!-- footer area start -->

      <footer class="main-footer footer-two bgp-bottom bgc-black rel pb-10 z-15 pt-50" style=" background-image: url(assets/images/backgrounds/footer-two.png); 
          background-position: center 330px; font-size: 18px;">
            <div class="widget-area pt-10 pb-20">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5 justify-content-between">
                        <div class="col">
                            <div
                                class="footer-widget d-flex flex-column justify-content-between align-items-beteween footer-text">
                                <div class="footer-main-text">
                                    <h3 class="text-white text-nowrap">Kabini River Lodge</h3>
                                    <div class="text-justify text-justify">Experience the tranquility of Kabini River Lodge, where adventure meets relaxation. Enjoy thrilling safaris, luxurious stays, and the beauty of nature.</div>
                                </div>
                                <div class="footer-payment text-white position-relative bottom-0">
                                    <h6 class="text-white mt-20 text-nowrap">Secure Online Booking</h6>
                                    <div class="payment-icons mt-2">
                                        <i class="fab fa-cc-visa" style="  font-size: 24px; margin-right: 10px;"></i>
                                        <i class="fab fa-cc-mastercard"
                                            style="font-size: 24px; margin-right: 10px;"></i>
                                        <i class="fab fa-cc-paypal" style="font-size: 24px; margin-right: 10px;"></i>
                                        <i class="fab fa-cc-amex" style="font-size: 24px; margin-right: 10px;"></i>
                                        <i class="fab fa-cc-discover" style="font-size: 24px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column 2: Navigation -->
                        <div class="col">
                            <div class="footer-widget footer-links ms-md-4">
                                <div class="footer-title">
                                    <h5>Navigation</h5>
                                </div>
                                <ul class="list-style-three">
                                    <li><a href="about.html">About Kabini Camp</a></li>
                                    <li><a href="gallery.html">Photo Gallery</a></li>
                                    <li><a href="things-to-do.html">Things To Do</a></li>
                                    <li><a href="reach.html">How To Reach</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Column 3: Accommodation -->
                        <div class="col">
                            <div class="footer-widget footer-links ms-lg-4">
                                <div class="footer-title">
                                    <h5>Accommodation</h5>
                                </div>
                                <ul class="list-style-three">
                                    <li><a href="maharaja.html">Maharaja Package</a></li>
                                    <li><a href="viceroy.html">Viceroy Package</a></li>
                                    <li><a href="tent.html">Tent Package</a></li>
                                    <li><a href="dormitory.html">Dormitory Package</a></li>
                                    <li><a href="cancellation.html">Cancellation Policy</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Column 4: Get in Touch -->
                        <div class="col">
                            <div class="footer-widget footer-contact">
                                <div class="footer-title">
                                    <h5>Get In Touch</h5>
                                </div>
                                <ul class="list-style-one">
                                    <li><i class="fal fa-map-marked-alt"></i>
                                        Nissana Beltur Post,<br>
                                        HD Kote Taluk, Karapura, <br>
                                        Near Mysore - 571114, <br>
                                        Karnataka, India.</li>
                                    <li class="mt-30"><i class="fal fa-envelope"></i>
                                        <a href="mailto:book@kabiniriverresort.com">book@kabiniriverresort.com</a>
                                    </li>
                                    <li><i class="fal fa-phone-volume  "></i>
                                        <div class="number d-flex flex-column">
                                            <a href="callto:+919480022108">+91 - 9480022108</a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-20 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="copyright-text text-center text-lg-start">
                                <p>Copyright © 2024 <a href="index.html"> Kabini River Lodge.</a> All rights reserved.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-7 text-center text-lg-end">
                            <ul class="footer-bottom-nav">
                                <li><a href="terms.html">Terms & Conditions</a></li>
                                <span>|</span>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target" data-target="html"><i
                            class="fas fa-arrow-up    "></i></button>
                </div>
            </div>
        </footer>
        <!-- footer area end -->




    </div>
    <!--End pagewrapper-->


    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Appear Js -->
    <script src="assets/js/appear.min.js"></script>
    <!-- Slick -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Image Loader -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Skillbar -->
    <script src="assets/js/skill.bars.jquery.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  AOS Animation -->
    <script src="assets/js/aos.js"></script>
    <!-- Custom script -->
    <script src="assets/js/script.js"></script>

</body>

</html>