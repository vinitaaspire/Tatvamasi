<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Aspire Innovations Pvt. Ltd." name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- SITE TITLE -->
    <title>Tatvamasi- Yoga </title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="#">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.css')}}">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/bootstrap/css/bootstrap.min.css')}}">
    <!--font--awesome--cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/ionicons.min.css')}}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/all.min.css')}}">
    <!-- Flaticon Font CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}">
    <!-- Themify Font CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/themify-icons.css')}}">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{asset('front/assets/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/owlcarousel/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/owlcarousel/css/owl.theme.default.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}">
    <!-- jquery-ui CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/jquery-ui.css')}}">


    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css?v=0.4')}}" />
    <link rel="stylesheet" href="{{asset('front/assets/css/responsive.css?v=0.4')}}" />
    <link rel="stylesheet" id="layoutstyle" href="{{asset('front/assets/color/theme-default.css?v=0.4')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <header class="header_wrap fixed-top dark_skin main_menu_uppercase main_menu_weight_600 transparent_header">
        <div class="container">
            <nav class="navbar navbar-expand-lg row align-items-md-center">
                <div class="col-lg-3 col-md-12 col-12">
                     <a class="navbar-brand logo p-0" href="{{route('/')}}">
                    <div class="wrapper">
                    <img src="assets/images/tatvamasi.png">
                </div>
                </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <img src="assets/images/icons/menu.png" class="img-fluid" alt="Menu" />
                    </button>
                </div>
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"
                        style="margin-top:-10px">
                        <ul class="navbar-nav align-items-md-center">
                            <li>
                                <a class="nav-link {{ Route::currentRouteNamed('/') ? 'active' : '' }}" href="{{route('/')}}">HOME</a>
                            </li>

                            <li>
                                <a class="nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }}" href="{{route('about')}}">ABOUT US</a>
                            </li>

                            <li>
                                <a class="nav-link {{ Route::currentRouteNamed('course') ? 'active' : '' }} " href="{{route('course')}}">COURSES</a>
                            </li>

                            <li>
                                <a class="nav-link {{ Route::currentRouteNamed('testimonial') ? 'active' : '' }}" href="{{route('testimonial')}}">TESTIMONIALS</a>
                            </li>

                            <li>
                                <a class="nav-link {{ Route::currentRouteNamed('blog') ? 'active' : '' }}" href="{{route('blog-list')}}">BLOG</a>
                            </li>
                            <li>
                                <a class="nav-link {{ Route::currentRouteNamed('contact') ? 'active' : '' }}" href="{{route('contact')}}">CONTACT</a>
                            </li>
                            <li>
                                <a class="btn btn-dark btn-nav1" href="{{route('login-head')}}"> <img
                                        src="assets/images/icons/login.png" class="login-icn" alt="Login" /> login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- END HEADER -->

       
                {{ $slot }}
                
 <!-- START FOOTER -->
 <footer class="footer_dark footer-sec  animation" data-animation="fadeInUp" data-animation-delay="0.3s">
    <div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <h5 class="widget_title">About Us</h5>
                    <div class="footer_desc">
                        <p>Welcome to Tatvamasi Yoga, where we offer the best online yoga classes from the top yoga
                            instructors.</p>
                    </div>
                    <ul class="contact_info list_none">
                        <li>
                            <i class="ri-phone-fill"></i>
                            <p>+91-93550-22333</p>
                        </li>
                        <li>
                            <i class="ri-mail-fill"></i>
                            <a href="#">info@tatvamasi.com</a>

                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <h5 class="widget_title">Quick Links</h5>
                    <ul class=" widget_links links_style2">

                        <li>
                            <a href="{{route('about')}}">About Us</a>
                        </li>
                        <li><a href="{{route('course')}}">Courses</a></li>
                        <li><a href="{{route('testimonial')}}">Testimonials</a></li>

                        <li><a href="{{route('blog-list')}}">Blog</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mb-md-0">
                    <h5 class="widget_title">Latest Post</h5>
                    <ul class="recent_post border_bottom_dash list_none">
                        <li>
                            <div class="post_footer">
                                <div class="post_content">
                                    <h6><a href="#">9 Best Yoga Poses to Become More Flexible</a></h6>
                                    <span class="post_date"><i class="ri-time-line"></i>April 14, 2023</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post_footer">
                                <div class="post_content">
                                    <h6><a href="#">Benefits and Specific Yoga Poses/Asanas</a></h6>
                                    <span class="post_date"><i class="ri-time-line"></i>March 09, 2023</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5 class="widget_title">Subscribe Newsletter</h5>
                    <div class="newsletter_form mb-4 mb-lg-5">
                        <form>
                            <input type="text" class="form-control " required="" placeholder="Enter Email Address">
                            <button type="submit" title="Subscribe" class="btn btn-default " name="submit"
                                value="Submit"><Img src="assets/images/icons/right-arrow.png" class="login-icn"
                                    alt="Button" /></button>
                        </form>
                    </div>
                    <h5 class="widget_title">Stay Connected</h5>
                    <ul class="list_none social_icons radius_social">
                        <li><a href="#" class="sc_facebook"><i class="ri-facebook-circle-fill"></i></a></li>
                        <li><a href="#" class="sc_twitter"><i class="ri-twitter-fill"></i></a></li>
                        <li><a href="#" class="sc_google"><i class="ri-google-fill"></i></a></li>
                        <li><a href="#" class="sc_instagram"><i class="ri-instagram-fill"></i></a></li>
                        <li><a href="#" class="sc_pinterest"><i class="ri-messenger-fill"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="bottom_footer border_top_transparent">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="copyright m-md-0 text-left text-md-left">Copyright © 2023 | <a
                                    href="{{route('/')}}" class="text_default text-white">Tatvamasi</a></p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list_none footer_link text-md-right text-sm-right">
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="policy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none; text-decoration: none;"><i class="ri-arrow-up-s-line"></i></a>

<!-- enqiury start -->
    <p class="text-center mb-0">
        <button id="myBtn" class="text-decoration-none text-white QuickInquiry">Enquiry</button>
    </p>
<!-- The Modal -->
<div id="myModal" class="modal modal-box">
<!-- Modal content -->
<div class="modal-content">

<div class="cancel-modal">

  <span class="close">&times;</span>
</div>
        <div class="row" style="padding:0 20px;">
        <div class="col-lg-12 col-md-12 col-sm-12">
             <h1 class="mt-1 head-content">ENQUIRY</h1>
            <form class="modal-box-info row mt-4 mb-4"> 
                <div class="col-lg-6 col-md-12" >
                    <div class="form-group">
                        <input type="text" placeholder="Name *" class="modal-box" required="" />
                    </div>
                </div>
                   
                <div class="col-lg-6 col-md-12 col-12 col-sm-12" >
                    <div class="form-group">
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" placeholder="Mobile No. *" required=""class="modal-box mobile_no" />   
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-12 col-sm-12 otp d-none" >
                    <div class="form-group">
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="modal-box" placeholder="OTP *" name="otp" required="" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12 col-sm-12" >
                    <div class="form-group">
                         <input type="email" placeholder="Email *" class="modal-box" required="" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12 col-sm-12" >
                    <div class="form-group">                                        
                        <select class="modal-box" required="" onchange="myCategoryStatus(this);">
                            <option class="">Select Category *</option>
                            <option value="weight_loss_&amp;_fat_burn">Weight Loss, Fat Burn &amp;Toning</option>
                            <option value="general_fitness_&amp;_Endurance">General Fitness And Endurance</option>
                            <option value="De_Stress_&amp;_Improved_Sleep">De-Stress And Improved Sleep</option>
                            <option value="thyroid_back_pain_&amp;_diabetes">Thyroid ,back pain &amp; Diabetes</option>
                            <option value="PCOS_PCOD_Management ">PCOS/PCODManagement </option>
                            <option value="yoga_for-pregnant_ladies">Yoga For Pregnant Ladies</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="form-group">
                        <select class="modal-box" required="">
                            <option class="" selected="">Select Batch *</option>
                            <option value="batch01">Batch 01 : 05:00-06:00 am</option>
                            <option value="batch02">Batch 02 : 05:30-06:30 am</option>
                            <option value="batch03">Batch 03 : 06:00-07:00 am</option>
                            <option value="batch04">Batch 04 : 07:00-08:00 am</option>
                            <option value="batch05">Batch 05 : 07:15-08:15 am</option>
                            <option value="batch06">Batch 06 : 07:30-08:30 am</option>
                            <option value="batch07">Batch 07 : 08:00-09:00 am</option>
                            <option value="batch08">Batch 08 : 08:30-09:30 am</option>
                            <option value="batch09">Batch 09 : 09:00-10:00 am</option>
                            <option value="batch10">Batch 10 : 10:30-11:30 am</option>
                            <option value="batch11">Batch 11 : 05:30-06:30 pm</option>
                            <option value="batch12">Batch 12 : 06:00-07:00 pm</option>
                            <option value="batch13">Batch 13 : 07:00-08:00 pm</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12 col-sm-12" >
                    <div class="form-group">
                        <input type="text" class="modal-box" placeholder="City " />
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-12 col-sm-12" >
                    <button type="submit" title="Submit" name="submit" value="Submit"  class="btn btn-default submit-btn action-button animation animated fadeInUp" >Submit <img src="assets/images/icons/right-arrow-btn.png" class="btn-icn"></button>
                </div>
            </form>
        </div>
    </div>              
 </div>
</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
</script>
<!-- enquiry end -->

<!-- Latest jQuery -->
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("navbarSupportedContent");
    var btns = header.getElementsByClassName("nav-link");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
<script src="{{asset('front/assets/js/jquery-1.12.4.min.js')}}"></script>
<!-- jquery-ui js -->
<script src="{{asset('front/assets/js/jquery-ui.js')}}"></script>
<!-- popper min js -->
<script src="{{asset('front/assets/js/popper.min.js')}}"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{asset('front/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- owl-carousel min js  -->
<script src="{{asset('front/assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
<!-- magnific-popup min js  -->
<script src="{{asset('front/assets/js/magnific-popup.min.js')}}"></script>
<!-- waypoints min js  -->
<script src="{{asset('front/assets/js/waypoints.min.js')}}"></script>
<!-- parallax js  -->
<script src="{{asset('front/assets/js/parallax.js')}}"></script>
<!-- jquery dd js  -->
<script src="{{asset('front/assets/js/jquery.dd.min.js')}}"></script>
<!-- countdown js  -->
<script src="{{asset('front/assets/js/jquery.countdown.min.js')}}"></script>
<!-- jquery.counterup.min js -->
<script src="{{asset('front/assets/js/jquery.counterup.min.js')}}"></script>
<!-- jquery.parallax-scroll js -->
<script src="{{asset('front/assets/js/jquery.parallax-scroll.js')}}"></script>
<!-- fit video  -->
<script src="{{asset('front/assets/js/jquery.fitvids.js')}}"></script>
<!-- imagesloaded js -->
<script src="{{asset('front/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- isotope min js -->
<script src="{{asset('front/assets/js/isotope.min.js')}}"></script>
<!-- cookie js -->
<script src="{{asset('front/assets/js/js.cookie.js')}}"></script>
<!-- scripts js -->
<script src="{{asset('front/assets/js/scripts.js')}}"></script>
<script src="{{asset('front/assets/js/custom.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script type="text/javascript"
    src="https://www.nadayoga.gr/app/plugins/contact-form-7/includes/js/scripts.js?ver=5.3"></script>

</body>

</html>