<x-guest-layout>
    <!----------Start----tab-section------------->
    <section class="inner-page inn-cat-pge position-relative pb-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">

                    <div class="container">
                        <div class="row ">
                            <div class="col-xl-9 offset-xl-3 col-lg-12 col-12">

                                <div class="form-cont-left">
                                    <h3 class="fs-title"><i class="las la-arrow-left me-md-3 me-2 text-dark" role="button" onclick="history.back()"></i>Start your Weight loss, Fat Burn & Toning</h3>
                                    <p class="text-center">Register with Tatvamasi Yoga: Where Self-Care Begins.</p>

                                    <form id="msform">
                                        <!-- progressbar -->
                                        <ul id="progressbar">

                                            <li class="active" id="making">
                                                <p>Step</p><span>Breath In</span>
                                            </li>
                                            <li class="" id="packaging">
                                                <p>Step</p><span>Breath Out</span>
                                            </li>
                                            <li class=" " id="shipping">
                                                <p>Step</p><span>Relax</span>
                                            </li>

                                        </ul>
                                        <fieldset class="fieldset-step">
                                            <div class="form-card mt-md-5">
                                                <div class="row mt-md-3">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control box-info" placeholder="Name *" name="name" required="" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control mobile_no box-info" placeholder="Mobile No. *" name="number" required="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 otp d-none">
                                                        <div class="form-group">
                                                            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control box-info" placeholder="OTP *" name="otp" required="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control box-info" placeholder="Email *" name="email" required="" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control box-info" placeholder="City " name="city" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <select class="form-select form-control" required="" onchange="CouresStatusChange(this);" name="courses">
                                                                <option disabled>Select Category *</option>
                                                                @foreach($courses as $list )
                                                                <option value="{{$list->id }}" @if($list->name == $course->name) selected @endif >{{$list->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                 
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <select class="form-select form-control package " required="" name="package">
                                                                    <option class="" selected="">Select Package *</option>
                                                                
                                                                    @if($course->price)
                                                                        @foreach(explode(',',$course->price) as $price)
                                                                            @php
                                                                                list($month, $amount) = explode('-', $price);
                                                                            @endphp
                                                                            <option value="{{ strtolower($month) }}">{{ ucfirst($month) }} Months : {{ $amount }}/- Rupees</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>



                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                        <select class="name-box batch_category" required="" name="batch">
                                                        <option class="">Select Batch *</option>
                                                        @foreach(json_decode($course->timeing, true) ?? [] as $timing)
                                                            @php
                                                                // Format the option text
                                                                $optionText = $timing['days'] . ' (' . formatTime($timing['start_time']) . ' - ' . formatTime($timing['end_time']) . ')';
                                                            @endphp
                                                            <option value="{{ $optionText }}">{{ $optionText }}</option>
                                                        @endforeach
                                                    </select>




                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="toggle-wrap">
                                                            <input type="hidden" name="gclid_field" value="" />
                                                            <input type="hidden" name="hsa_cam_field" value="" />
                                                            <input type="radio" name="subscriptionType" value="onetoone" id="one" />
                                                            <label for="one">One to One Session</label>
                                                            <input type="radio" name="subscriptionType" value="group" id="group" checked="" />
                                                            <label for="group">Group Session</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="chk">
                                                            <input type="checkbox" class="me-2" role="button" />
                                                            <span>
                                                                I have read and agree to Tatvamasi's <a href="#" class="mx-2 text-decoration-none" target="_self">Terms of Use</a> and <a href="#" class="mx-2 text-decoration-none" target="_self">Privacy Policy</a></span>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-default next action-button" value="Next">CONTINUE
                                                <img src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}" class="btn-icn"></button>


                                        </fieldset>

                                        <fieldset class="fieldset-step">
                                            <div class="form-card mt-md-5">
                                                <div class="row mt-md-3">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="payment-gateway">
                                                            <div class="payment-gateway-div d-flex align-items-center">
                                                                <div class="payment-div-box">
                                                                    Your Order
                                                                </div>
                                                            </div>
                                                            <div class="payment-gateway-option">
                                                                <nav class="d-none">
                                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Payumoney</button>
                                                                    </div>
                                                                </nav>
                                                                <div class="tab-content" id="nav-tabContent">
                                                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                                        <div class="payment-box-cnt">
                                                                            <table class="table mb-0 table-responsive w-100">
                                                                                <tr>
                                                                                    <td>Course Fee:</td>
                                                                                    <td>3400</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Tax:</td>
                                                                                    <td>100</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td> <strong>Total: </strong></td>
                                                                                    <td>
                                                                                        <div class="">
                                                                                            <strong>3500</strong>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-group form-coupon mt-md-2 mt-3 row">
                                                            <div class="col-md-6 offset-md-3 col-12">
                                                                <input type="text" class="mt-0 mt-md-3 name-box coupon" placeholder="Have coupon code?" />
                                                            </div>
                                                            <div class="col-md-3 col-12">
                                                                <button class="mt-0 mt-md-3" type="button" role="button">APPLY</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-default next action-button" value="Next">Pay Now
                                                <img src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}" class="btn-icn"></button>

                                            <button type="button" class="btn btn-default previous action-button-previous" value="Previous"> <img src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}" class="btn-icn reverse ">Go Back</button>

                                        </fieldset>

                                        <fieldset class="fieldset-step">
                                            <div class="form-card mt-md-5">
                                                <div class="row mt-md-3">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="payment-success">
                                                            <div class="payment-success-img">
                                                                <img src="{{asset('front/assets/images/icons/success.png')}}" class="img-fluid w-100" alt="Money" />
                                                            </div>
                                                            <div class="payment-success-cnt">
                                                                <h3><span>&#8377;</span>5,600</h3>
                                                                <h4>Payment Successful!</h4>
                                                                <span>The payment has been done successfully.</span>
                                                                <span>Thanks for being there with us.</span>
                                                                <p><span>Payment ID: </span> 283834, 24 Oct, 2023-11:40
                                                                    PM</p>
                                                            </div>
                                                            <div class="payment-btn">
                                                                <button>DONE <img src="{{asset('front/assets/images/icons/done.png')}}" class="login-icn" alt="Payment Done" />
                                                                </button>
                                                            </div>
                                                            <span>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 
                                            <button type="submit"
                                                class="btn btn-default next action-button animation animated fadeInUp"
                                                data-animation="fadeInUp" data-animation-delay="0.7s"
                                                value="Next">SUBMIT <img src="assets/images/icons/right-arrow-btn.png"
                                                    class="btn-icn"></button>

                                            <button type="button"
                                                class="btn btn-default previous action-button-previous animation animated fadeInUp"
                                                data-animation="fadeInUp" data-animation-delay="0.7s"
                                                value="Previous">PREVIOUS <img
                                                    src="assets/images/icons/right-arrow-btn.png"
                                                    class="btn-icn"></button> -->
                                        </fieldset>


                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
                    <div class="desc-cont-right">
                        <div class="container">
                            <h3 class="title-cont mt-md-5 mt-3">How it Works</h3>
                            <div class="row align-items-md-center">
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                    <div class="desc-img-div-box position-relative">
                                        <h5 class="title-cont-img">Weight Management</h5>
                                        <img src="{{asset('front/assets/images/weight.jpg')}}" class="cont-img-right" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                    <div class="content-categ-cont">
                                        <p><span><strong> Holistic Approach:</strong></span> We take a holistic approach
                                            to weight management, combining asanas, exercises & mindful breathing.</p>
                                        <p><span><strong> Steady Metabolism:</strong></span> Maintain a steady
                                            metabolism, promoting gradual and sustainable weight loss.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-md-center flex-lg-row-reverse">
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                    <h5 class="title-cont-img">Fat Burn and Sculpting</h5>
                                    <img src="{{asset('front/assets/images/fat.jpeg')}}" class="cont-img-right">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4 ">
                                    <div class="content-categ-cont">
                                        <p><span><strong> Muscle Engagement:</strong></span> Engage and strengthen
                                            muscle groups, contributing to fat burning and toning.</p>
                                        <p><span><strong> Increased Metabolism:</strong></span> Aiding in fat loss.</p>
                                        <p><span><strong> Balanced Fitness:</strong></span> Our approach combines muscle
                                            engagement and flexibility.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-md-center">
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                    <h5 class="title-cont-img">Fat Burn and Sculpting</h5>
                                    <img src="{{asset('front/assets/images/fat1.jpeg')}}" class="cont-img-right">
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12">

                                    <div class="content-categ-cont">
                                        <p><span><strong> Muscle Definition:</strong></span> Emphasizing holding poses
                                            promotes muscle definition and toning.</p>
                                        <p><span><strong> Strong Core:</strong></span> Many poses strengthen the core,
                                            helping you achieve a lean and toned midsection.</p>
                                        <p> <span><strong> Gentle Yet Effective:</strong></span> Our classes offer a
                                            gentle, sustainable path to muscle toning, suitable for all fitness levels.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-----------end----tab---section------------>
    <div class="step">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <picture>
                        <source media="(max-width:768px)" srcset="{{asset('front/assets/images/icons/step2.png')}}" class="img-fluid w-100" alt="step 4" />
                        <img src="{{asset('front/assets/images/icons/step.png')}}" class="img-fluid w-100" alt="Step 4" />
                    </picture>
                </div>
            </div>
        </div>
    </div>
    <!----start---client-reviews---->
    <section class="client-sec-inner">
        <div class="container">
            <div class="row">
                <div class="main-title">
                    <h1>What our clients say!</h1>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="carousel_slider owl-carousel owl-theme" id="review-div" data-margin="15" data-loop="true" data-autoplay="true" data-center="true" data-nav="true" data-dots="false" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
                        @foreach($testimonial as $test)
                        <div class="item">
                            <div class="clt_tstmonial-div-box position-relative ">
                                <div class="clt_tstmonial-div-quotes position-absolute">“</div>
                                <div class="clt_tstmonial-div-cnt">
                                    {!! $test->desc ?? ''!!}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--end----client-reviews---->
</x-guest-layout>