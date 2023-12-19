<x-guest-layout>
        <!-----start--courses---head-------->
        <section class="course-head">
        <div class="top-course">
            <div class="container">
                <div class="row">
                    <div class="main-title-cours">
                        <h1>{{$courses->name ?? ''}}</h1>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!------end----courses--head----->



    <!-----------start---courses--list------>

    <section class="course-list">
        <div class="container">
            <div class="row align-items-md-start pb-0 mb-5" >
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="left-img-cours">
                        <img src="{{asset($courses->image ?? '') ?? ''}}">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="right-cont-cours mx-lg-3">
                        <div class="main-content-cours mt-lg-0 mt-4">
                            <h2>{{$courses->name ?? '' }}</h2>
                        </div>
                        <div class="info-content-cours">
                            <div class="details-part mt-1 mb-1">
                                <p><img src="{{asset('front/assets/images/menu.png')}}">Category <span>:</span> <span>{{ $courses->category?->name ?? ''}}</span></p>
                                <p><img src="{{asset('front/assets/images/repeat.png')}}">Duration <span>:</span> <span> {{findSmallestValueAfterDash($courses->price ?? '')}}</span></p>
                                <p><img src="{{asset('front/assets/images/website.png')}}">Lecture <span>:</span><span>{{ $courses->no_of_lecture ?? ''}}</span></p>
                            </div>
                        </div>

                        <div class="desc-course">
                          {!! $courses->desc ?? ''!!}
                            <a class="btn btn-default  animation animated fadeInUp" href="{{route('checkout',['courses' =>$courses->name ?? '' ])}}"
                                data-animation="fadeInUp" data-animation-delay="0.7s"
                                style="animation-delay: 0.7s; opacity: 1;">GET STARTED <img
                                    src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}" class="btn-icn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-------end----courses---list------------>
</x-guest-layout>