<x-guest-layout>

    <!---START---HEAD---SECTION-->

    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $key => $banner)
            <div class="carousel-item @if($key == 0) active @endif " data-bs-interval="3000">
                <section class="sli-div">
                    <img src="{{ asset( $banner->image ?? '')}}" class="img-fluid w-100" alt="Slider" />
                    <div class="top-head">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-12">
                                    <div class="sli-div-box position-relative">
                                        <div class="sli-content animation" data-animation="fadeInUp"
                                            data-animation-delay="0.5s">
                                            <h4>{{$banner->title ?? ''}}</h4>
                                            <a class="btn btn-default  animation" href="{{ $banner->link ?? ''}}"
                                                data-animation="fadeInUp" data-animation-delay="0.7s"
                                                style="margin-top:45px; border-radius:10px;"><img
                                                    src="{{asset('front/assets/images/icons/namaste.png')}}" class="login-icn"
                                                    alt="Get Started" />BOOK DEMO CLASSES</a>
                                            <a class="btn btn-white d-none animation" href="contact.html"
                                                data-animation="fadeInUp" data-animation-delay="0.8s"
                                                style="margin-top:45px;"><img src="{{ asset('front/assets/images/icons/contact.png')}}"
                                                    class="login-icn" alt="Contact Us" /> CONTACT US</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @endforeach
           
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- box start -->
    <section class="imp-div position-relative p-0">
        <div class="container">
            <div class="row">
              
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="imp-div-box position-relative">
                        <span>1</span>
                        <div class="d-flex align-items-md-center">
                            <div class="imp-div-img">
                                <img src="{{asset('front/assets/images/icon.png')}}" class="img-fluid w-100" alt="" title="">
                            </div>
                            <div class="imp-div-cnt">
                                <span>Live &amp; Interactive<br>Classes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="imp-div-box position-relative">
                        <span>2</span>
                        <div class="d-flex  align-items-md-center">
                            <div class="imp-div-img">
                                <img src="{{asset('front/assets/images/icon2.png')}}" class="img-fluid w-100" alt="" title="">
                            </div>
                            <div class="imp-div-cnt">
                                <span>Small Group<br>Size</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="imp-div-box position-relative">
                        <span>3</span>
                        <div class="d-flex  align-items-md-center">
                            <div class="imp-div-img">
                                <img src="{{asset('front/assets/images/icon3.png')}}" class="img-fluid w-100" alt="" title="">
                            </div>
                            <div class="imp-div-cnt">
                                <span>Certified Best<br>Trainers</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="imp-div-box position-relative">
                        <span>4</span>
                        <div class="d-flex align-items-md-center">
                            <div class="imp-div-img">
                                <img src="{{asset('front/assets/images/icon4.png')}}" class="img-fluid w-100" alt="" title="">
                            </div>
                            <div class="imp-div-cnt">
                                <span>Studio Like<br>Feel</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- box end -->

    <!----END--HEAD--SECTION-->

    <!-----BOX---end--->

    <!-- START SECTION BENEFIT -->
    <section class="sec-benefits ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <span class="sub_heading">Features</span>
                        <h2>What We Help With</h2>
                    </div>
                    <p>Contrary to popular belief Lorem is not simply random text. It has roots in adipiscing ncididunt
                        piece of classical literature</p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    @foreach($courses->take(3) as $course)
                    <a href="weight-fat-ton.html" class="box-featur-link">
                        <div class="icon_box  text-center icon_box_style1 animation" data-animation="fadeInRight"
                            data-animation-delay="0.3s">
                            <div class="box_icon">
                                <img src="{{ asset($course->icon ?? '')}}">
                            </div>
                            <div class="intro_desc">
                                <h5>{{ $course->name ?? ''}}</h5>
                                <p> {{ $course->short_desc ?? ''}}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                  
                  
                </div>

                <div class="col-lg-4 col-sm-12">
                    <div class="animation position-relative " data-animation="fadeInUp" data-animation-delay="0.5s">
                        <div class="why-yoga-img">
                            <img src="{{asset('front/assets/images/mandala-center-bene.png')}}" alt="" class="img-fluid w-100">
                        </div>
                        <img src="{{asset('front/assets/images/features-girl.png?v=0.1')}}" class="image-bene" />
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12">
                @foreach($courses->slice(-3) as $course)
                    <a href="weight-fat-ton.html" class="box-featur-link">
                        <div class="icon_box  text-center icon_box_style1 animation" data-animation="fadeInRight"
                            data-animation-delay="0.3s">
                            <div class="box_icon">
                                <img src="{{ asset($course->icon ?? '')}}">
                            </div>
                            <div class="intro_desc">
                                <h5>{{ $course->name ?? ''}}</h5>
                                <p> {{ $course->short_desc ?? ''}}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach

                   

                </div>

            </div>
        </div>
    </section>
    <!-- END SECTION BENIFIT -->


    <!---start--why---choose---us--->
    <section class="why-us-section">
        <div class="top-why-sec">
            <div class="container-xxl why py-md-4 py-0">
                <div class="container">
                    <div class="row g-5">
                   
                        <div class="col-lg-5 left-side-content animation" data-animation="fadeInUp"
                            data-animation-delay="0.5s">
                            <span class="sub_heading ">Why Choose Us!</span>
                            <h1 class="content mb-4"> Guiding Your Yoga Journey with Care</h1>
                            <p class="mb-md-4 mb-0 dark-txt">At Tatvamasi , we're dedicated to your yoga journey. Our
                                experienced instructors passionately guide you on a path to well-being. We believe in
                                yoga's transformative power and are committed to nurturing your growth, whether you're a
                                beginner or an experienced yogi.
                            </p>

                        </div>
                     
                        <div class="col-lg-7">
                            <div class="row g-4 align-items-center">
                            @foreach($whyUs->take(4) as $why)
                                <div class="col-md-6  animation" data-animation="fadeInLeft"
                                    data-animation-delay="0.3s">
                                    <div class="why-box border  p-4">
                                        <img src="{{ $why->image ?? ''}}">
                                        <h5 class="mb-3 main-text">{{ $why->title ?? ''}} </h5>
                                        <p class="mb-3">{!! $why->description ?? ''!!}</p>
                                        <!-- <a class="fw-semi-bold" href="">Read More <i
                                                class="fa fa-arrow-right ms-1"></i></a> -->
                                    </div>
                                </div>
                                @endforeach
                             
                            </div>
                        </div>

                    @php
                        $lastWhy = $whyUs->last();
                    @endphp

                    @if($lastWhy)
                        <div class="col-lg-5" data-animation="" id="mt-boxes">
                            <div class="why-box border p-4">
                                <img src="{{ $lastWhy->image ?? '' }}">
                                <h5 class="mb-3 main-text">{{ $lastWhy->title ?? '' }}</h5>
                                <p class="mb-3">{!! $lastWhy->description ?? '' !!}</p>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why--choose----us---End -->

    <!----free-trial--sec--->
    <section class="trial-sec position-relative" id="trial-section" >
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 col-md-12  col-12">
                    <div class="form-for-trial mt-lg-5 mt-md-4 animation" data-animation="fadeInUp"
                        data-animation-delay="0.5s">
                        <span class="sub_heading "></span>
                        <h1>{!! $trial->title ?? '' !!}</h1>
                        <p>{!! $trial->description ?? '' !!}</p>
                        <form>
                            <div class="row pt-md-4 pt-3 ">
                                <div class="col-lg-6 col-md-6">
                                    <div class="trail-sec-inp">
                                        <input type="text" placeholder="Name *" class="name-box" required="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="trail-sec-inp">
                                        <input type="text"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            maxlength="10" placeholder="Mobile No. *" required=""
                                            class="name-box mobile_no" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 otp d-none">
                                    <div class="trail-sec-inp">
                                        <input type="text"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            class="name-box" placeholder="OTP *" name="otp" required="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="trail-sec-inp">
                                        <input type="email" placeholder="Email *" class="name-box" required="" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="trail-sec-inp">
                                        <select class="name-box" required="" onchange="CouresStatusChange(this);" name="courses">
                                            <option class="">Select courses *</option>
                                            @foreach($allCourses as $cours)
                                            <option value="{{ $cours->id }}">{{ $cours->name ?? '' }}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="trail-sec-inp">
                                        <select class="name-box batch_category" required="" name="batch">
                                        <option class="">Select Batch *</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="trail-sec-inp">
                                        <input type="text" class="name-box" placeholder="City " />
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-12">
                                    <div class="trail-sec-inp trail-sec-inp-btn">
                                        <button type="button" style="width: 260px!important; white-space: nowrap!important;" class="btn btn-default  animation"
                                            data-animation="fadeInUp" data-animation-delay="0.7s">BOOK DEMO CLASSES <img
                                                src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}"
                                                class="btn-icn" /></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="trail-sec-img">
                        <img src="{{('front/assets/images/81235c7fefba59c99fe49fd68f5832ef.jpg')}}" class="img-fliud w-100"
                            alt="Free Trail Form" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---END -FREE TRIAL SECTION-->

    <!-- START SECTION TESTIMONIAL -->
    <section class="client-sec">
        <div class="top-client">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                        data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
                        <div class="heading_s1">
                            <span class="sub_heading">Testimonial</span>
                            <h2>Our Client Say!</h2>
                        </div>
                        <p>Hear from our satisfied clients and discover how our classes have made a positive impact on
                            their well-being and find inspiration for your own yoga journey.</p>
                        <div class="xs_divider clearfix d-none d-md-block"></div>
                    </div>
                </div>
                <div class="row mt-lg-5 mt-3">
                    <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme"
                            data-margin="15" data-loop="true" data-autoplay="true" data-center="true" data-nav="true"
                            data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'
                            data-navText='<i class="ri-arrow-left-s-line"></i>, <i class="ri-arrow-left-s-line"></i>'>
                            @foreach($testimonial as $testo)
                            <div class="testimonial_box">
                                <div class="testi_meta">
                                    <div class="testimonial_img">
                                        <img src="{{asset($testo->profile_pic ?? '')}}" alt="client">
                                    </div>
                                    <div class="testi_user">
                                        <h5>{{ $testo->name ?? ''}}</h5>
                                        <span>{{ $testo->designation ?? ''}}</span>
                                    </div>
                                </div>
                                <div class="testi_desc">
                                    <p>{!! $testo->desc ?? '' !!}</p>
                                </div>
                            </div>
                            @endforeach
                         
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIAL -->


    <!---START---ABOUT--->
    <section class="about-sec">
        <div class="top-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="{{asset($about->image ?? '')}}" class="abt-div-img">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="content-about animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                            <span class="sub_heading">ABOUT US</span>
                            <h2>{{ $about->title ?? ''}}</h2>
                                {!! $about->description ?? '' !!}
                            <a class="know-more-link  animation text-decoration-none" href="about.html"
                                data-animation="fadeInUp" data-animation-delay="0.7s">KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END--ABOUT--->


    <!-- START SECTION TEACHER -->
    <section class="team-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1 training animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <span class="outline">Our Expert</span>
                        <h2>TRAINERS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12">


                    <div class="carousel_slider owl-carousel owl-theme" data-margin="10" data-loop="true"
                        data-autoplay="true" data-nav="true" data-autoplay="true"  data-slideTransition="linear" data-autoplayTimeout="0"
                        data-autoplaySpeed="3000"
                        data-responsive='{"0":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                    @foreach($trainers as $trainer)
                        <div class="item" data-timing="1000" >
                            <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                <div class="team_img">
                                    <img src="{{asset($trainer->image ?? '')}}" alt="team1">
                                </div>
                                <div class="team_info text-center">
                                    <div class="team_title">
                                        <h5>{{ $trainer->name ?? ''}}</h5>
                                        <span>{{ $trainer->designation ?? ''}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TEACHER -->

    <!-- START SECTION CLASSES -->
    <section class=" class-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <span class="sub_heading">Choose Your Level Best</span>
                        <h2>Our Courses</h2>
                    </div>
                    <p>A yoga course is available for every physical and mental issue a person may be experiencing</p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $course)
                <div class="col-lg-4 col-sm-6">
                    <div class="classes_box   animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <div class="classes_img">
                            <img src="{{ asset($course->image ?? '')}}" alt="image" />
                            <div class="link_container">
                                <a href="#"><i class="ri-drag-move-line"></i></a>
                            </div>
                        </div>
                        <div class="classes_info">
                            <div class="classes_teacher">
                                <img src="{{asset($course->trainer?->image )}}" alt="image" />
                                <span>{{ $course->trainer?->name }}</span>
                            </div>
                            <div class="classes_title">
                                <span class="badge badge-pill badge-info">{{ $course->category?->name }}</span>
                                <h4><a href="#">{{ $course->name ?? ''}}</a></h4>
                            </div>
                            <ul class="classes_schedule">
                                <li><i class="ri-calendar-line"></i>{{ formatDays($course->days) ?? ''}}</li>
                                <li><i class="ri-time-line"></i>{{ formatTimings($course->timeing) ?? ''}}</li>
                            </ul>

                        </div>
                    </div>
                </div>
                @endforeach
            
                <div class="col-lg-12 col-md-12">
                    <div class="trail-sec-inp trail-sec-inp-btn mx-auto">
                        <a href="course.html" type="button" class="btn btn-default  animation animated fadeInUp"
                            data-animation="fadeInUp" data-animation-delay="0.7s"
                            style="animation-delay: 0.7s; opacity: 1;">View More <img
                                src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}" class="btn-icn"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CLASSES -->

    <!-- START SECTION PRICING TABLE -->
    <section class="pricing-sec">
        <div class="top-price">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center animation"
                     data-animation="fadeInUp"
                        data-animation-delay="0.3s">
                        <div class="heading_s1">
                            <span class="sub_heading">Choose Our Pricing</span>
                            <h2>Yoga Pricing Plan</h2>
                        </div>
                        <p>Below you will find our yoga course pricing. We have a variety of options to suit your needs
                        </p>
                        <div class="small_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                @foreach($pricing as $price)
                    <div class="col-lg-4">
                        <div class="pricing_box {{ $loop->index === 1 ? 'pricing_box_middle' : '' }} pricing_style1 animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                            @if($price->best_value == 1)
                                <div class="pricing_ribbon">Best Value</div>
                            @endif
                            <div class="pr_title_wrap border-bottom {{ $price->best_value == 1 ? 'bg_default text_white' : '' }}">
                                <h4 class="pr_title">{{ $price->month }} MONTHS </h4>
                                <div class="price_tage">
                                    <p>
                                        <strong class="cancel-money">@ {{ $price->gross_price }} /- </strong>
                                        <strong>{{ $price->price }} /- </strong>
                                    </p>
                                </div>
                            </div>
                            <div class="pr_content pt-3">
                                <ul class="list_none pr_list">
                                    @foreach(explode(',', $price->description) as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pr_footer">
                                <a href="get-started.html" class="btn btn-dark text-uppercase">Buy Now <img src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}" class="btn-icn"></a>
                            </div>
                        </div>
                    </div>
                @endforeach


                </div>
            </div>
        </div>
        <!-- <div class="shape_img">
        <div class="ol_shape8">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="assets/images/shape8.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape9">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="assets/images/shape9.png" alt="image"/>
            </div>
        </div>
    </div> -->
    </section>
    <!-- END SECTION PRICING TABLE -->

    <!-- START SECTION BLOG -->
    <section class="pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.3s">
                    <div class="heading_s1">
                        <span class="sub_heading">Our Latest Articles</span>
                        <h2>From Our Blog & News</h2>
                    </div>
                    <p>We have our blogs where we share valuable knowledge content with our clients, helping them stay
                        informed and updated.</p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post  animation" data-animation="fadeInLeft" data-animation-delay="0.3s">
                        <div class="blog_img">
                            <a href="blog.html">
                                <img src="{{ asset($blog->image ?? '' )}}" alt="blog_small_img1">
                            </a>
                        </div>
                        <div class="blog_content">
                            <h5 class="blog_title"><a href="blog.html">{{$blog->name ?? ''}}</a>
                            </h5>
                            <!--  <ul class="list_none blog_meta">
                            <li><a href="#"><img src="assets/images/cl_teacher_img1.jpg" alt="image"><span>Dayna</span></a></li>
                            <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                        </ul> -->
                            <p>{{ $blog->shortdesc ?? '' }}</p>
                            <a href="{{route('blog',['id' => $blog->slug ]?? '' )}}" class="blog_link text-decoration-none">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->


    <!-- feature start -->
    <section class="pb_70 featured-by-div d-none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.3s">
                    <div class="heading_s1">
                        <span class="sub_heading">Our Partners</span>
                        <h2>Featured By</h2>
                    </div>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <!-- partners start -->
                <div class="col-xl-12 col-lg-12">
                    <div class="slick slick-slider  client-logo" id="ser-div-partner">

                        <div class="item">
                            <a href="https://www.airtel.com/" target="_blank" class="text-decoration-none">
                                <img src="https://www.aspireindia.com/iflow/assets/img/airtel.png"
                                    class="img-fluids w-10">
                            </a>
                        </div>

                        <div class="item">
                            <a href="https://www.heromotocorp.com/en-in.html" target="_blank"
                                class="text-decoration-none">
                                <img src="https://www.aspireindia.com/iflow/assets/img/client/hero.png"
                                    class="img-fluids w-10">
                            </a>
                        </div>

                        <div class="item">
                            <a href="https://www.google.com/" target="_blank" class="text-decoration-none">
                                <img src="https://www.aspireindia.com/iflow/assets/img/google.png"
                                    class="img-fluids w-10">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.microsoft.com/en-in/" target="_blank" class="text-decoration-none">
                                <img src="https://www.aspireindia.com/iflow/assets/img/microsoft.png"
                                    class="img-fluids w-10">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.amazon.in/" target="_blank" class="text-decoration-none">
                                <img src="https://www.aspireindia.com/iflow/assets/img/client/amazon.png"
                                    class="img-fluids w-10">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://english.bmrc.co.in/" target="_blank" class="text-decoration-none">
                                <img src="https://www.aspireindia.com/iflow/assets/img/client/bmrcl.png"
                                    class="img-fluids w-10">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://mmrcl.com/" target="_blank" class="text-decoration-none">
                                <img src="https://www.aspireindia.com/iflow/assets/img/client/mmrc.png"
                                    class="img-fluids w-10">
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature end -->

    </x-guest-layout>