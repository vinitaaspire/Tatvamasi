<x-guest-layout>
        <!-----start--courses---head-------->
        <section class="dsh-div">
        <div class="container">
            <div class="row">
                <div class="main-title-cours">
                </div>
            </div>
        </div>

    </section>
    <!------end----courses--head----->


    <!-- login start -->
    <section class="profile-div position-relative py-70">
        <div class="container">
            <div class="row mt-4 mb-4 mx-0">
        @include('front/dashboard/inc/sidebar')
                <div class="col-xl-9 col-lg-8 col-12 col-md-7 col-sm-12 p-md-0 ">
                    <div class="pro-div-box bg-white">
                        <div class="pro-div-box-title position-relative">
                            <div class="mb-lg-5 mb-4">
                                <h2>My Courses</h2>
                            </div>
                        </div>
                        <div class="pro-div-cnt row">
                            <div class="col-xl-4 col-lg-5 col-md-10 col-sm-6">
                                <div class="course-div-box position-relative mb-md-3 mb-3" role="button">
                                    <a href="course-jouney.html" class="text-decoration-none text-center d-block" role="button">
                                        <div class="course-div-box-img">
                                            <img src="{{asset('front/assets/images/course3.jpg')}}" class="img-fluid w-100" alt="Course" />
                                        </div>
                                        <span>Yoga for Beginners Course</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->

</x-guest-layout>
