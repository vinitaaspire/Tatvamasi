<x-guest-layout>
       <!------start---contact--form----->
       <section class="login-form-sec">
        <div class="head-img-log">
            <img alt="tatvamasi" src="{{asset('front/assets/images/group-people-sitting-lotus-position2.jpg')}}">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="login-head-content">
                        <h2>Welcome to Tatvamasi</h2>
                        <p>Register for Free 1-on-1 session with trainer</p>
                        <h5> <span>Hurry Up!</span> Only few sessions available for this week</h5>
                    </div>
                    <div class="form-left-login">
                        <form class="tbl-login-info row">
                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" required data-error="Enter Email" placeholder="Email/Mobile"
                                        class="form-control" name="email">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                <div class="form-group">
                                    <input type="password" required data-error="Enter Your Password"
                                        placeholder="Password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="option-for-otp">
                                <p><a href="{{route('otp')}}">Login With OTP </a></p>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                                <button type="submit" title="Subscribe" name="submit" value="Submit"
                                    class="btn btn-default submit-btn action-button animation animated fadeInUp"
                                    style="opacity: 1;">Submit <img src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}"
                                        class="btn-icn"></button>
                            </div>
                            
                            <div class="option-for-signup">
                                <p>Don’t have an account? <span><a href="{{route('signup')}}">Sign Up</a></span></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="right-yoga-div text-center">
                        <img src="{{asset('front/assets/images/female-2027987_1920.png')}}" class="right-yoga" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------end----contact--form----->

</x-guest-layout>