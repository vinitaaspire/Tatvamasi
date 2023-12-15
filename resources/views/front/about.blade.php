<x-guest-layout>
<section class="about-sec-inner">
        <div class="upper-part-abt">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="cnt-about-in">
                            <span class=" yellow">{{ $about->title ?? '' }}</span>
                            <h1>About Us</h1>
                            {!! $about->description ?? ''!!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 img-bg-clr">
                        <img src="{{asset('front/assets/images/abt.png')}}" class="img-abt1">
                        <img src="{{asset('front/assets/images/1 (1).png')}}" class="img-abt2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------end----about------------->
    <section class="why-us-abt">
        <div class="container">
            <div class="row">
                <div class="main-heading-why-abt">
                    <h1>Why Tatvamasi Yoga?</h1>
                </div>
            </div>
            <div class="row align-items-md-center mt-md-5">
                <div class="col-lg-4 col-md-12 col-sm-12 row mt-10">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="box-why-abt box_shadow4 text-center box-why-abt_style1 animation"
                            data-animation="fadeInRight" data-animation-delay="0.3s">
                            <div class="intro_desc">
                                <h5>Authenticity</h5>
                                <p> Our classes are rooted in the authentic teachings of yoga, providing a genuine
                                    and
                                    traditional experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="box-why-abt box_shadow4 text-center box-why-abt_style1 animation"
                            data-animation="fadeInRight" data-animation-delay="0.3s">

                            <div class="intro_desc">
                                <h5>Inclusivity</h5>
                                <p> We welcome individuals of all levels, creating a space where everyone can
                                    explore
                                    the
                                    path of yoga, regardless of experience.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="right-yoga-div text-center">
                        <img src="{{ asset('front/assets/images/female-2027987_1920.png')}}" class="right-yoga">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="box-why-abt box_shadow4 mt-md-5 text-center box-why-abt_style1 animation"
                            data-animation="fadeInRight" data-animation-delay="0.3s">
                            <div class="intro_desc">
                                <h5>Holistic Wellness</h5>
                                <p>Beyond physical benefits, our classes promote mental well-being, stress
                                    reduction,
                                    and an
                                    overall sense of balance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 row col-sm-12  mt-10">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="box-why-abt box_shadow4 text-center box-why-abt_style1 animation"
                            data-animation="fadeInRight" data-animation-delay="0.3s">
                            <div class="intro_desc">
                                <h5>Experienced Instructors</h5>
                                <p>Guided by a team of experienced instructors, our classes offer expert guidance,
                                    ensuring
                                    a safe and supportive environment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="box-why-abt box_shadow4 text-center box-why-abt_style1 animation"
                            data-animation="fadeInRight" data-animation-delay="0.3s">

                            <div class="intro_desc">
                                <h5>Tailored Practices</h5>
                                <p>Whether you're managing PCOD, seeking relief from back pain, or aiming for
                                    fitness,
                                    our
                                    classes are tailored to address specific needs.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--------------------------------------------->
    <section class="connect-abt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="main-heading-why-abt">
                        <h3 class="mb-lg-3 mb-2">Join Our Community</h3>
                        <p>Embark on a soulful voyage of self-discovery with Tatvamasi Yoga. Our vibrant community is a
                            testament to the transformative power of yoga. Whether you're a seasoned practitioner or new
                            to
                            yoga, our classes provide a gateway to balance, health, and happiness.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="main-heading-why-abt">
                        <h3 class="mb-lg-3 mb-2">Connect with Us</h3>
                        <p>Follow us on social media to stay updated on classes, workshops, and wellness tips. We're
                            excited
                            to be part of your journey towards a healthier and happier life.<br>

                            Namaste,<br>
                            The Tatvamasi Yoga Team</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------->

    <!-- feature start -->
    <section class="pb_70 featured-by-div">
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
                    <div class="slick slick-slider  client-logo d-flex" id="ser-div-partner" >
                     @foreach($partners as $list)
                        <div class="item">
                            <a href="{{ $list->name ?? '' }}" target="_blank" class="text-decoration-none">
                                <img src="{{ asset( $list->image ?? '' )}}"
                                    class="img-fluids w-10">
                            </a>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature end -->
</x-guest-layout>