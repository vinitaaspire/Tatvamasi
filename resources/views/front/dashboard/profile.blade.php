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
                                <h2>Profile</h2>
                            </div>
                        </div>
                        <div class="profile-form">
                            <form class="profile-form-info row" method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" required="" data-error="Enter Name" placeholder="Name *"
                                            value="{{ Auth::User()->name ?? '' }}" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">

                                    <div class="form-group">
                                        <input type="text" required="" name="mobile" data-error="Enter Phone No." value="{{ Auth::User()->mobile ?? '' }}"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            placeholder="Mobile *" class="form-control" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" required="" data-error="Enter Your Email"
                                            value="{{ Auth::User()->email ?? '' }}" placeholder="Email *"
                                            class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" required="" data-error="Enter Your City" value="{{ Auth::User()->city ?? '' }}"
                                            placeholder="City" class="form-control" name="city">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="position-relative w-100">
                                            <input type="date" required="" name="dob" value="{{ Auth::User()->dob ?? '' }}" placeholder="Date Of Birth" class="datepicker form-control dob" />
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <label class=" custom-file">
                                            <input type="file" class="custom-file-input"
                                                id="customFileLangHTML" name="photo" accept="image/png, image/gif, image/jpeg" />
                                            <label class="custom-file-label" for="customFileLangHTML"
                                                data-browse="Browse"></label>
                                            
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea data-error="Enter Your Address" placeholder="Comments"
                                            rows="4" cols="50" name="comments" class="form-control">{{ Auth::User()->comments ?? '' }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                    <button type="submit" title="Subscribe" name="submit" value="Submit"
                                        class="btn btn-default submit-btn action-button animation animated fadeInUp"
                                        style="opacity: 1;">Update <img src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}"
                                            class="btn-icn"></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
</x-guest-layout>