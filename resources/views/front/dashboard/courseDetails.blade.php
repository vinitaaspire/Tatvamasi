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
                                <h2><i class="las la-arrow-left me-2" role="button"
                                        onclick="location.href='{{route("dashboard")}}'"></i> {{ $course->name }}</h2>
                            </div>
                        </div>
                        <div class="pro-div-cnt px-sm-4 px-0 px-md-0">
                            <div class="row  pb-lg-5 pb-4 mb-5" >
                                <div class="col-lg-5 col-xl-4 col-md-12 col-sm-12">
                                    <div class="left-img-cours">
                                        <img src="{{asset( $course->image )}}">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-xl-8 col-md-12 col-sm-12">
                                    <div class="right-cont-cours mx-xl-3">
                                        <div class="desc-course">
                                            <div class="desc-course-cnt">
                                               {!!$course->short_desc !!}
                                            </div><a href="javascript:void(0)"
                                                class="text-decoration-none text-nowrap mt-1 d-block">read
                                                more </a>
                                        </div>

                                        <div class="bat-tim-div mt-xl-5 mt-4">
                                            <div class="d-flex align-items-center position-relative">

                                                <span>Batch Timing</span>
                                                <div class="bat-lnk-bnt">
                                                    <div class="bat-lnk-bnt-edit">
                                                        <a href="javascript:void(0)"
                                                            class="text-decoration-none border-0 shadow-0"
                                                            onclick="expandSelect('select_box')" role="button">Edit</a>
                                                    </div>
                                                    <div class="bat-lnk-bnt-sbt d-none">
                                                        <a href="javascript:void(0)"
                                                            class="text-decoration-none border-0 shadow-0"
                                                            onclick="closeSelect('select_box')" role="button">Save</a>
                                                        <a href="javascript:void(0)"
                                                            class="text-decoration-none border-0 shadow-0"
                                                            onclick="closeSelect('select_box')" role="button">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bat-tim-lnk d-flex">
                                                <select class="bat-tim-lnk-btn" id="select_box" required="">
                                                
                                                </select>
                                                <input type="hidden" name="select_flag" id="select_flag" value="0">

                                            </div>
                                        </div>
                                    </div>
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
