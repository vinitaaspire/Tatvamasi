<x-guest-layout>
<!----------Start----tab-section------------->
<section class="inner-page position-relative pb-0">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">

                <div class="container">
                    <div class="row ">
                        <div class="col-xl-9 offset-xl-3 col-lg-12 col-12">

                            <div class="form-cont-left">
                                <h3 class="fs-title">Start your Weight loss ,Fat Burn & Toning</h3>
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
                                                        <input type="text" class="form-control box-info"
                                                            placeholder="Name *" name="name" required="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" maxlength="10"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                            class="form-control mobile_no box-info"
                                                            placeholder="Mobile No. *" name="number" required="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 otp d-none">
                                                    <div class="form-group">
                                                        <input type="text"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                            class="form-control box-info" placeholder="OTP *"
                                                            name="otp" required="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control box-info"
                                                            placeholder="Email *" name="email" required="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control box-info"
                                                            placeholder="City " name="city" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <select class="form-select form-control" required=""
                                                            onchange="myCategoryStatus(this);">
                                                            <option class="" selected="">Select Package *</option>
                                                            <option value="1month">1 Month: 2,499/-</option>
                                                            <option value="3month">3 Months: 6,999/-</option>
                                                            <option value="6month">6 Months: 12,999/-</option>
                                                            <option value="1year">12 Months: 22,999/-</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <select class="form-select form-control" required=""
                                                            onchange="myCategoryStatus(this);">
                                                            <option class="" >Select Category *</option>
                                                            <option value="weight_loss_&_fat_burn" selected="" >Weight Loss, Fat Burn &
                                                                Toning</option>
                                                            <option value="general_fitness_&_Endurance">General Fitness And
                                                                Endurance</option>
                                                            <option value="De_Stress_&_Improved_Sleep">De-Stress And Improved Sleep
                                                            </option>
                                                            <option value="thyroid_back_pain_&_diabetes">Thyroid ,
                                                                back pain & Diabetes</option>
                                                            <option value="PCOS_PCOD_Management ">PCOS/PCOD
                                                                Management </option>
                                                            <option value="yoga_for-pregnant_ladies">Yoga For
                                                                Pregnant Ladies</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <select class="form-select form-control" required="" >
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
                                                <div class="col-lg-12">
                                                    <div class="toggle-wrap">
                                                        <input type="hidden" name="gclid_field" value="" />
                                                        <input type="hidden" name="hsa_cam_field" value="" />
                                                        <input type="radio" name="subscriptionType" value="onetoone"
                                                            id="one" />
                                                        <label for="one">One to One Session</label>
                                                        <input type="radio" name="subscriptionType" value="group"
                                                            id="group" checked="" />
                                                        <label for="group">Group Session</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="chk">
                                                        <input type="checkbox" class="me-2" role="button" />
                                                        <span>
                                                            I have read and agree to Tatvamasi's <a href="#"
                                                                class="mx-2 text-decoration-none"
                                                                target="_self">Terms of Use</a> and <a href="#"
                                                                class="mx-2 text-decoration-none"
                                                                target="_self">Privacy Policy</a></span>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-default next action-button"
                                            value="Next">CONTINUE
                                            <img src="assets/images/icons/right-arrow-btn.png"
                                                class="btn-icn"></button>


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
                                                                <div class="nav nav-tabs" id="nav-tab"
                                                                    role="tablist">
                                                                    <button class="nav-link active"
                                                                        id="nav-home-tab" data-bs-toggle="tab"
                                                                        data-bs-target="#nav-home" type="button"
                                                                        role="tab" aria-controls="nav-home"
                                                                        aria-selected="true">Payumoney</button>
                                                                </div>
                                                            </nav>
                                                            <div class="tab-content" id="nav-tabContent">
                                                                <div class="tab-pane fade show active" id="nav-home"
                                                                    role="tabpanel" aria-labelledby="nav-home-tab">
                                                                    <div class="payment-box-cnt">
                                                                        <table
                                                                            class="table mb-0 table-responsive w-100">
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
                                                            <input type="text" class="mt-0 mt-md-3 name-box coupon"
                                                                placeholder="Have coupon code?" />
                                                        </div>
                                                        <div class="col-md-3 col-12">
                                                            <button class="mt-0 mt-md-3" type="button"
                                                                role="button">APPLY</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-default next action-button"
                                            value="Next">Pay Now
                                            <img src="assets/images/icons/right-arrow-btn.png"
                                                class="btn-icn"></button>

                                        <button type="button"
                                            class="btn btn-default previous action-button-previous"
                                            value="Previous"> <img src="assets/images/icons/right-arrow-btn.png"
                                                class="btn-icn reverse ">Go Back</button>

                                    </fieldset>

                                    <fieldset class="fieldset-step">
                                        <div class="form-card mt-md-5">
                                            <div class="row mt-md-3">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="payment-success">
                                                        <div class="payment-success-img">
                                                            <img src="assets/images/icons/success.png"
                                                                class="img-fluid w-100" alt="Money" />
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
                                                            <button>DONE <img src="assets/images/icons/done.png"
                                                                    class="login-icn" alt="Payment Done" />
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
                                    <img src="assets/images/weight.jpg" class="cont-img-right" />
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
                                <img src="assets/images/fat.jpeg" class="cont-img-right">
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
                                <img src="assets/images/fat1.jpeg" class="cont-img-right">
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
                    <source media="(max-width:768px)" srcset="assets/images/icons/step2.png" class="img-fluid w-100"
                        alt="step 4" />
                    <img src="assets/images/icons/step.png" class="img-fluid w-100" alt="Step 4" />
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
                <div class="carousel_slider owl-carousel owl-theme" id="review-div" data-margin="15"
                    data-loop="true" data-autoplay="true" data-center="true" data-nav="true" data-dots="false"
                    data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
                    <div class="item">
                        <div class="clt_tstmonial-div-box position-relative ">
                            <div class="clt_tstmonial-div-quotes position-absolute">“</div>
                            <div class="clt_tstmonial-div-cnt">
                                <p>After months with Tatvamasi, I've lost 10 kgs and gained a new lease
                                    on life. The personalized guidance in their classes made all the
                                    difference in my weight loss journey."</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="clt_tstmonial-div-box position-relative ">
                            <div class="clt_tstmonial-div-quotes position-absolute">“</div>
                            <div class="clt_tstmonial-div-cnt">
                                <p>Thanks to Tatvamasi, I shed 8 kgs! The instructors' expertise and the
                                    supportive community kept me motivated. I couldn't be happier with
                                    the results.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="clt_tstmonial-div-box position-relative ">
                            <div class="clt_tstmonial-div-quotes position-absolute">“</div>
                            <div class="clt_tstmonial-div-cnt">
                                <p>I never thought online yoga could make such a difference, but
                                    Tatvamasi proved me wrong. I lost 12 kgs, and it's all thanks to
                                    their authentic yoga classes and expert guidance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="clt_tstmonial-div-box position-relative ">
                            <div class="clt_tstmonial-div-quotes position-absolute">“</div>
                            <div class="clt_tstmonial-div-cnt">
                                <p>To be frank, it took me little time to shed my extra kilos but I have
                                    been very much satisfied since my overall health has improved a lot.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end----client-reviews---->
</x-guest-layout>