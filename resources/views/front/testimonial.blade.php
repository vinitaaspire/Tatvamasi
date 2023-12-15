<x-guest-layout>
    <!------start---testimonial--head------->

<section class="testim-head">
    <div class="container">
        <div class="row align-items-md-center">
            <div class="col-lg-6 col-sm-12">
                <div class="test-left-content">
                    <h6>LIVE ONLINE YOGA CLASSES</h6>
                    <h1>No false claims. Just results.</h1>
                    <p>Yoga is one of the best alternative for various ailments including back pain, neck pain, shoulder pain, sinus, diabetes, obesity and so on.</p>
                    <p>Tatvamasi is best-loved for its best weight loss online yoga classes.
                        Here we present , what our customer says about our weight loss online yoga classes and other success stories.</p>
                        <p>Yoga is one of the best alternative for various ailments including back pain, neck pain, shoulder pain, sinus, diabetes, obesity and so on.</p>

                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="test-right-img">
                    <img src="{{ asset('front/assets/images/what-we-help-img.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>

<!-----end----testimonial----head---->

<section class="test-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="main-title-testi">
                <h1>Hear it from our diverse community of yogis</h1>
            </div>
            </div>
        </div>
        <div class="row">
            @foreach($testimonial as $test)
             <div class="col-lg-6 col-sm-12">
                <div class="part-testi">
                                <div class="div-test-box">
                    <img src="{{ asset($test->profile_pic ?? '')}}">
                    <div class="content-testi">
                    <h4>{{ $test->name ?? '' }}</h4>
                {!! $test->desc ?? ''!!}
                    </div>
                </div>
                <div class="thnx-sec">
                    <h5>Thank You</h5>
                </div> 
                </div> 
            </div>
            @endforeach
           
        </div>
          

        </div>
    </div>
</section>

<!------start---testimonial------boxesss----->
</x-guest-layout>