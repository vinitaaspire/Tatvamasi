<x-guest-layout>

<!-----start--courses---head-------->
<section class="course-head">
    <div class="top-course">
        <div class="container">
            <div class="row">
                <div class="main-title-cours">
                    <h4>Courses List</h4>
                    <h1>Enroll in Yoga Courses</h1>
                </div>
            </div>
        </div>
    </div>

</section>
<!------end----courses--head----->



<!-----------start---courses--list------>

<section class="course-list">
    <div class="container">
        @foreach($courses as $course)
        <div class="row align-items-md-center pb-lg-5 pb-4 mb-5" style="border-bottom:1px solid #ebebeb;">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="left-img-cours">
                    <img src="{{ asset($course->image ?? '')}}">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="right-cont-cours mx-lg-3">
                    <div class="main-content-cours mt-lg-0 mt-4">
                        <h2>{{$course->name ?? ''}}</h2>
                    </div>
                    <div class="info-content-cours">
                        <div class="details-part mt-1 mb-1">
                        <p><img src="{{asset('front/assets/images/menu.png')}}">Category <span>:</span> <span>{{$course->category->name ?? ''}}</span></p>
    
<?php
// Assuming $course->price is a string in the format "11 - 307, 8 - 310, 11 - 93, 6 - 492"
$priceString = $course->price;

// Explode the string into an array based on commas
$priceArray = explode(', ', $priceString);

// Extract the first entry
if (!empty($priceArray)) {
    // Split the first entry into month and price
    list($firstMonth, $firstPrice) = explode(' - ', $priceArray[0]);

    // Output the first month and price
   // echo "First Month: $firstMonth, First Price: $firstPrice";
} else {
    // echo "No data available";
}
?>



                        <p><img src="{{asset('front/assets/images/repeat.png')}}">Duration <span>:</span> <span>{{ $firstMonth ?? ''}}</span></p>
                        <p><img src="{{asset('front/assets/images/website.png')}}">Lecture <span>:</span><span>{{ $course->no_of_lecture ?? ''}}</span></p>
                    </div>
                        <div class="money-part">
                            <img src="{{asset('front/assets/images/icons/rupee.png')}}" class="img-fluid" alt="Rupee" title="Rupee" /><p>{{$firstPrice ?? ''}}</p>
                        </div>
                    </div>

                    <div class="desc-course">
                        <p>Modern postural yoga consists largely but not exclusively of the practice of asanas. There were very few standing asanas before 1900. By 2012, there were at least 19 widespread styles from Ashtanga Yoga to Viniyoga. These emphasise different aspects including aerobic exercise, precision in the asanas, and spirituality in the Haṭha yoga tradition.</p>
                        <a class="btn btn-default  animation animated fadeInUp" href="{{route('course.details',['title' => $course->name ])}}" data-animation="fadeInUp" data-animation-delay="0.7s" style="animation-delay: 0.7s; opacity: 1;">KNOW MORE <img src="{{asset('front/assets/images/icons/right-arrow-btn.png')}}" class="btn-icn"></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      
    </div>
</section>

</x-guest-layout>