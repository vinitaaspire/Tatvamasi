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
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css')}}">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/bootstrap/css/bootstrap.min.css')}}">
    <!--font--awesome--cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/ionicons.min.css')}}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/all.min.css')}}">
    <!-- Flaticon Font CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css')}}">
    <!-- Themify Font CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/themify-icons.css')}}">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ asset('front/assets/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/assets/owlcarousel/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('front/assets/owlcarousel/css/owl.theme.default.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css')}}">
    <!-- jquery-ui CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/jquery-ui.css')}}">


    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css?v=0.4')}}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css?v=0.4')}}" />
    <link rel="stylesheet" id="layoutstyle" href="{{ asset('front/assets/color/theme-default.css?v=0.4')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" type="text/css" rel="Stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" /> -->

</head>

<body>
    <!-- START HEADER -->
    <header class="header_wrap fixed-top dark_skin main_menu_uppercase main_menu_weight_600 transparent_header">
        <div class="container">
            <nav class="navbar navbar-expand-lg row align-items-md-center">
                <div class="col-lg-3 col-md-12 col-12">
                    <a class="navbar-brand logo p-0" href="{{route('/')}}">
                        <div class="wrapper">
                            <img src="{{ asset(getSetting()->logo ?? '')}}">
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="{{ asset('front/assets/images/icons/menu.png')}}" class="img-fluid" alt="Menu" />
                    </button>
                </div>
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" style="margin-top:-10px">
                        <ul class="navbar-nav align-items-md-center">
                            <li>
                                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }} " href="{{route('/')}}">HOME</a>
                            </li>

                            <li>
                                <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="{{route('about')}}">ABOUT US</a>
                            </li>

                            <li>
                                <a class="nav-link {{ (request()->is('course')) ? 'active' : '' }}  " href="{{route('course')}}">COURSES</a>
                            </li>

                            <li>
                                <a class="nav-link {{ (request()->is('testimonial')) ? 'active' : '' }}   " href="{{route('testimonial')}}">TESTIMONIALS</a>
                            </li>

                            <li>
                                <a class="nav-link {{ (request()->is('blogs')) ? 'active' : '' }}  " href="{{route('blogs')}}">BLOG</a>
                            </li>
                            <li>
                                <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}  " href="{{route('contact')}}">CONTACT</a>
                            </li>
                            <li>
                            @if(Auth::check())
                                <a class="btn btn-dark btn-nav1" href="{{ route('dashboard') }}">
                                    <img src="{{ asset('front/assets/images/icons/login.png') }}" class="login-icn" alt="Dashboard" /> Dashboard
                                </a>
                            @else
                                <a class="btn btn-dark btn-nav1" href="{{ route('login') }}">
                                    <img src="{{ asset('front/assets/images/icons/login.png') }}" class="login-icn" alt="Login" /> Login
                                </a>
                            @endif

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
                                <p>{{getSetting()->mobile ?? ''}}</p>
                            </li>
                            <li>
                                <i class="ri-mail-fill"></i>
                                <a href="#">{{getSetting()->email ?? ''}}</a>

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
                            <!-- <li><a href="faq">FAQ</a></li> -->
                            <li><a href="{{route('blogs')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mb-md-0">
                        <h5 class="widget_title">Latest Post</h5>
                        <ul class="recent_post border_bottom_dash list_none">
                            @foreach(latestpost() as $latestpost)
                            <li>
                                <div class="post_footer">
                                    <div class="post_content">
                                        <h6><a href="#">{{$latestpost->name ?? '' }}</a></h6>
                                        <span class="post_date"><i class="ri-time-line"></i>{{ optional($latestpost->created_at)->format('F d, Y') ?? '' }}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5 class="widget_title">Subscribe Newsletter</h5>
                        <div class="newsletter_form mb-4 mb-lg-5">
                            <form method="post" action="{{route('subscribe')}}" id="subscribe">
                                <input type="text" class="form-control email" name="email" required="" placeholder="Enter Email Address">
                                <button type="submit" title="Subscribe" class="btn btn-default " name="submit" value="Submit"><Img src="{{ asset('front/assets/images/icons/right-arrow.png')}}" class="login-icn" alt="Button" /></button>
                            </form>
                        </div>
                        <div class="text-primary responseMessage"></div>
                        <h5 class="widget_title">Stay Connected</h5>
                        <ul class="list_none social_icons radius_social">
                            <li><a href="{{getSetting()->facebook ?? ''}}" class="sc_facebook"><i class="ri-facebook-circle-fill"></i></a></li>
                            <li><a href="{{getSetting()->twitter ?? ''}}" class="sc_twitter"><i class="ri-twitter-fill"></i></a></li>
                            <li><a href="{{getSetting()->google ?? ''}}" class="sc_google"><i class="ri-google-fill"></i></a></li>
                            <li><a href="{{getSetting()->instagram ?? ''}}" class="sc_instagram"><i class="ri-instagram-fill"></i></a></li>
                            <li><a href="{{getSetting()->pinterest ?? ''}}" class="sc_pinterest"><i class="ri-messenger-fill"></i></a></li>
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
                                <p class="copyright m-md-0 text-left text-md-left"><a href="{{route('/')}}" class="text_default text-white">{{getSetting()->coppyright ?? ''}}</a></p>
                            </div>
                            <div class="col-md-6">
                                <ul class="list_none footer_link text-md-right text-sm-right">
                                    <li><a href="{{route('terms')}}">Terms of use</a></li>
                                    <li><a href="{{route('policy')}}">Privacy Policy</a></li>
                                    <li><a href="{{route('returnPolicy')}}">Return Policy</a></li>
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
                    <h1 class="mt-1 head-content">Enquiry</h1>
                    <form class="modal-box-info row mt-4 mb-4 enquirySave" method="post" action="{{route('enquiry.save')}}">
                        @csrf
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Name *" class="modal-box" required="" name="name" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" name="mobile" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" placeholder="Mobile No. *" required="" name="name" class="modal-box mobile_no" />
                            </div>
                        </div>

                        <!-- <div class="col-lg-12 col-md-12 col-12 col-sm-12 otp d-none">
                            <div class="form-group">
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="modal-box" placeholder="OTP *" name="otp" required="" />
                            </div>
                        </div> -->

                        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                            <div class="form-group">
                                <input type="email" placeholder="Email *" class="modal-box" required="" name="email" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                            <div class="form-group">
                            <select class="name-box" required="" onchange="CouresStatusChange(this);" name="courses">
                                            <option class="">Select courses *</option>
                                            @foreach(App\Models\Courses::active()->get() as $cours)
                                            <option value="{{ $cours->id }}">{{ $cours->name ?? '' }}</option>
                                             @endforeach
                                        </select>
                            
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                            <div class="form-group">
                            <select class="name-box batch_category" required="" name="batch">
                                        <option class="">Select Batch *</option>
                                        </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="modal-box" placeholder="City "  name="city"/>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <button type="submit" title="Submit" name="submit" value="Submit" class="btn btn-default submit-btn action-button animation animated fadeInUp">Submit <img src="{{ asset('front/assets/images/icons/right-arrow-btn.png')}}" class="btn-icn"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- whatsapp start -->
    <a href="https://web.whatsapp.com/send?phone={{getSetting()->whatsapp ?? ''}}&text=Hi" role="button" class="text-decoration-none whatsapp-img" target="_blank">
        <img src="{{ asset('front/assets/images/icons/whatsapp.png')}}" class="img-fluid w-100" alt="Whatsapp" />
    </a>
    <!-- whatsapp end -->

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
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
    <script src="{{ asset('front/assets/js/jquery-1.12.4.min.js')}}"></script>
    <!-- jquery-ui js -->
    <script src="{{ asset('front/assets/js/jquery-ui.js')}}"></script>
    <!-- popper min js -->
    <script src="{{ asset('front/assets/js/popper.min.js')}}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('front/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('front/assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
    <!-- magnific-popup min js  -->
    <script src="{{ asset('front/assets/js/magnific-popup.min.js')}}"></script>
    <!-- waypoints min js  -->
    <script src="{{ asset('front/assets/js/waypoints.min.js')}}"></script>
    <!-- parallax js  -->
    <script src="{{ asset('front/assets/js/parallax.js')}}"></script>
    <!-- jquery dd js  -->
    <script src="{{ asset('front/assets/js/jquery.dd.min.js')}}"></script>
    <!-- countdown js  -->
    <script src="{{ asset('front/assets/js/jquery.countdown.min.js')}}"></script>
    <!-- jquery.counterup.min js -->
    <script src="{{ asset('front/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- jquery.parallax-scroll js -->
    <script src="{{ asset('front/assets/js/jquery.parallax-scroll.js')}}"></script>
    <!-- fit video  -->
    <script src="{{ asset('front/assets/js/jquery.fitvids.js')}}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- isotope min js -->
    <script src="{{ asset('front/assets/js/isotope.min.js')}}"></script>
    <!-- cookie js -->
    <script src="{{ asset('front/assets/js/js.cookie.js')}}"></script>
    <!-- scripts js -->
    <script src="{{ asset('front/assets/js/scripts.js')}}"></script>
    <script src="{{ asset('front/assets/js/custom.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script type="text/javascript" src="https://www.nadayoga.gr/app/plugins/contact-form-7/includes/js/scripts.js?ver=5.3"></script>

    <script>
    function CouresStatusChange(selectElement) {
    var courseId = selectElement.value;

    $.ajax({
        url: '/getbatch/' + courseId,
        method: 'GET',
        success: function(data) {
            var batchesSelect = $('.batch_category');
            batchesSelect.empty(); // Clear previous options

            // Assuming you have received the batches data from the AJAX call
            var batches = data.batches;

            batches.forEach(function(batch) {
                batchesSelect.append($('<option>', {
                    value: batch.value,
                    text: batch.label
                }));
            });

            // var pakegeselect = $('.package');
            // pakegeselect.empty();

            // var package = data.package;

            // package.forEach(function(batch) {
            //     pakegeselect.append($('<option>', {
            //         value: batch.month,
            //         text: batch.amount
            //     }));
            // });

        },
        error: function(error) {
            console.error(error.responseText);
        }
    });
}


        $("#subscribe").submit(function(e) {
            e.preventDefault();
            var email = $('.email').val();
            let url = "{{ route('subscribe') }}";
            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    _token: '{{ csrf_token() }}',
                    email: email
                },
                dataType: 'json',
                success: function(response) {
                    $('.responseMessage').html(response.success);
                    console.log(response);
                },
                error: function(xhr) {
                    // Handle error response
                    console.error(xhr.responseText);
                }
            });
        });

//         $('.enquirySave').on('submit', function(e){
//     e.preventDefault();

//     var data = $(this).serialize(); 

//     $.ajax({
//         type: 'POST',
//         url: '{{ route("enquiry.save") }}',
//         data: {
//             _token: '{{ csrf_token() }}',
//             formData: data // Explicitly specify the key for the data variable
//         },
//         dataType: 'json',
//         success: function(response) {
//             console.log(response);
//         },
//         error: function(xhr) {
//             console.error(xhr.responseText);
//         }
//     });
// });


    </script>


</body>

</html>