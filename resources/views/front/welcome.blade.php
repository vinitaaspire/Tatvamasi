<x-guest-layout>

    <!---START---HEAD---SECTION-->
   @if(isset($banners) && count($banners) > 0)
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $key => $banner)
            <div class="carousel-item @if($key == 0) active @endif " data-bs-interval="3000">
                <section class="sli-div">
                   <img src="{{ asset($banner->image ?? '')}}" class="img-fluid d-none d-md-block w-100" alt="Desktop Slider" />
                   <img src="{{ asset($banner->mobile_image ?? '')}}" class="img-fluid d-md-none w-100" alt="Mobile Slider" />
                    <div class="top-head">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-12">
                                    <div class="sli-div-box position-relative">
                                        <div class="sli-content animation" data-animation="fadeInUp"
                                            data-animation-delay="0.5s">
                                            <h4>{{$banner->title ?? ''}}</h4>
                                            <a class="btn btn-default  animation" href="{{ $banner->link ?? ''}}" target="_black"
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
  @endif
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
   @if($abouts->where('module', 'feature')->first()->status == 1)
    <section class="sec-benefits ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <span class="sub_heading"> {{ $abouts->where('module','feature')->first()->name ?? '' }} </span>
                        <h2>{{$abouts->where('module','feature')->first()->title ?? ''}}</h2>
                    </div>
                    <p>{!!$abouts->where('module','feature')->first()->shortdesc ?? '' !!}</p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    @foreach($feature->take(3) as $course)
                    <a href="{{ route('checkout') }}" class="box-featur-link">
                        <div class="icon_box  text-center icon_box_style1 animation" data-animation="fadeInRight"
                            data-animation-delay="0.3s">
                            <div class="box_icon">
                                <img src="{{ asset($course->image ?? '')}}">
                            </div>
                            <div class="intro_desc">
                                <h5>{{ $course->name ?? ''}}</h5>
                                <p> {!! $course->description ?? ''!!}</p>
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
                @foreach($feature->slice(-3) as $course)
                    <a href="{{ route('checkout') }}" class="box-featur-link">
                        <div class="icon_box  text-center icon_box_style1 animation" data-animation="fadeInRight"
                            data-animation-delay="0.3s">
                            <div class="box_icon">
                                <img src="{{ asset($course->image ?? '')}}">
                            </div>
                            <div class="intro_desc">
                                <h5>{{ $course->name ?? ''}}</h5>
                                <p> {!! $course->description ?? ''!!}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach

                   

                </div>

            </div>
        </div>
    </section>
      @endif
    <!-- END SECTION BENIFIT -->


    <!---start--why---choose---us--->
      @if($abouts->where('module', 'whyus')->first()->status == 1)
    <section class="why-us-section">
        <div class="top-why-sec">
            <div class="container-xxl why py-md-4 py-0">
                <div class="container">
                    <div class="row g-5">
                   
                        <div class="col-lg-5 left-side-content animation" data-animation="fadeInUp"
                            data-animation-delay="0.5s">
                            <span class="sub_heading ">{{ $abouts->where('module', 'whyus')->first()->name ?? '' }} </span>
                            <h1 class="content mb-4"> {{ $abouts->where('module', 'whyus')->first()->title ?? '' }}</h1>
                            <p class="mb-md-4 mb-0 dark-txt"> {{ $abouts->where('module', 'whyus')->first()->shortdesc ?? '' }}
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
    @endif
    <!-- why--choose----us---End -->

    <!----free-trial--sec--->
    @if($trial->status == 1)
    <section class="trial-sec position-relative" id="trial-section" >
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 col-md-12  col-12">
                    <div class="form-for-trial mt-lg-5 mt-md-4 animation" data-animation="fadeInUp"
                        data-animation-delay="0.5s">
                        <span class="sub_heading "></span>
                        <h1>{!! $trial->title ?? '' !!}</h1>
                        <p>{!! $trial->description ?? '' !!}</p>
                        <form method="POST" action="{{route('trail.class')}}">
                            @csrf
                            <div class="row pt-md-4 pt-3 ">
                                <div class="col-lg-6 col-md-6">
                                    <div class="trail-sec-inp">
                                        <input type="text" placeholder="Name *" name="name" class="name-box" required="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="trail-sec-inp">
                                      <input type="number"
                                           pattern=".{10,}"
                                           maxlength="10" 
                                           placeholder="Mobile No. *" 
                                           required=""
                                           class="name-box mobile_no" />

                                    </div>
                                </div>
                                <!--<div class="col-lg-12 col-md-12 col-sm-12 col-12 otp d-none">-->
                                <!--    <div class="trail-sec-inp">-->
                                <!--        <input type="text"-->
                                           
                                <!--            class="name-box" placeholder="OTP *" name="otp" required="" />-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="col-lg-6 col-md-6">
                                    <div class="trail-sec-inp">
                                        <input type="email" placeholder="Email *" class="name-box" name="email" required="" />
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
                                        <option selected disabled  class="">Select Batch *</option>
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
                                      
                                        <button type="submit" name="submit" value="submit" style="width: 260px!important; white-space: nowrap!important;" class="btn btn-default  animation"
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
    @endif
    <!---END -FREE TRIAL SECTION-->

    <!-- START SECTION TESTIMONIAL -->
     @if($abouts->where('module', 'testimonial')->first()->status == 1)
     
    <section class="client-sec">
        <div class="top-client">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                        data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
                        <div class="heading_s1">
                            <span class="sub_heading">{{ $abouts->where('module', 'testimonial')->first()->name  ?? ''}}</span>
                            <h2>{{ $abouts->where('module', 'testimonial')->first()->title  ?? ''}}</h2>
                        </div>
                        <p>{!! $abouts->where('module', 'testimonial')->first()->shortdesc  ?? ''!!}</p>
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
      @endif
    <!-- END SECTION TESTIMONIAL -->


    <!---START---ABOUT--->
      @if($abouts->where('module', 'about')->first()->status == 1)
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
    @endif
    <!--END--ABOUT--->


    <!-- START SECTION TEACHER -->
     @if($abouts->where('module', 'trainer')->first()->status == 1)
     
    <section class="team-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1 training animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <span class="outline">{{$abouts->where('module', 'trainer')->first()->name ?? ''}}</span>
                        <h2>{{$abouts->where('module', 'trainer')->first()->title ?? ''}}</h2>
                        <p>{!! $abouts->where('module', 'trainer')->first()->description ?? ''!!}</p>
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
    @endif
    <!-- END SECTION TEACHER -->

    <!-- START SECTION CLASSES -->
      @if($abouts->where('module', 'courses')->first()->status == 1)
    <section class=" class-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <span class="sub_heading">{{ $abouts->where('module', 'courses')->first()->name ?? ''}}</span>
                        <h2> {{ $abouts->where('module', 'courses')->first()->title ?? ''}}</h2>
                    </div>
                    <p>{!! $abouts->where('module', 'courses')->first()->shortdesc ?? ''!!}</p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $course)
                <div class="col-lg-4 col-sm-6">
                    <div class="classes_box   animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <a href="{{route('course.details',['title' => $course->name ])}}">
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
                        </a>
                    </div>
                </div>
                @endforeach
            
                <div class="col-lg-12 col-md-12">
                    <div class="trail-sec-inp trail-sec-inp-btn mx-auto">
                        <a href="{{route('course')}}" type="button" class="btn btn-default  animation animated fadeInUp"
                            data-animation="fadeInUp" data-animation-delay="0.7s"
                            style="animation-delay: 0.7s; opacity: 1;">View More <img
                                src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}" class="btn-icn"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- END SECTION CLASSES -->

    <!-- START SECTION PRICING TABLE -->
     @if($abouts->where('module', 'pricing')->first()->status == 1)
    <section class="pricing-sec">
        <div class="top-price">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center animation"
                     data-animation="fadeInUp"
                        data-animation-delay="0.3s">
                        <div class="heading_s1">
                            <span class="sub_heading">{{$abouts->where('module', 'pricing')->first()->name ?? ''}}</span>
                            <h2>{{$abouts->where('module', 'pricing')->first()->title ?? ''}}</h2>
                        </div>
                        <p>{!!$abouts->where('module', 'pricing')->first()->shortdesc ?? ''!!}
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
                                <a href="{{ route('checkout') }}" class="btn btn-dark text-uppercase">Buy Now <img src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}" class="btn-icn"></a>
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
    @endif 
    <!-- END SECTION PRICING TABLE -->

    <!-- START SECTION BLOG -->
       @if($abouts->where('module', 'blogs')->first()->status == 1)
       
    <section class="pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.3s">
                    <div class="heading_s1">
                        <span class="sub_heading">{{$abouts->where('module', 'blogs')->first()->name  ?? ''}}</span>
                        <h2>{{$abouts->where('module', 'blogs')->first()->title ?? ''}}</h2>
                    </div>
                    <p>{!! $abouts->where('module', 'blogs')->first()->shortdesc ?? ''!!}</p>
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
    @endif
    <!-- END SECTION BLOG -->


    <!-- feature start -->
          @if($abouts->where('module', 'partners')->first()->status == 1)
    <section class="pb_70 featured-by-div">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.3s">
                    <div class="heading_s1">
                        <span class="sub_heading">{{$abouts->where('module', 'partners')->first()->name ?? ''}}</span>
                        <h2>{{$abouts->where('module', 'partners')->first()->title ?? ''}}</h2>
                        <p>{!! $abouts->where('module', 'partners')->first()->shortdesc ?? ''!!}</p>
                    </div>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <!-- partners start -->
                <div class="col-xl-12 col-lg-12">
                    <div class="slick slick-slider  client-logo d-flex" id="ser-div-partner">
                         @foreach($partners as $partner)
                        <div class="item">
                            <a href="{{$partner->name ?? ''}}" target="_blank" class="text-decoration-none">
                                <img src="{{ asset($partner->image ?? '')}}"
                                    class="img-fluids w-10">
                            </a>
                        </div>
                    @endforeach
                       


                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- feature end -->

    </x-guest-layout>