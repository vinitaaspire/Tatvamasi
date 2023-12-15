<x-guest-layout>
<!-----start--contact---head-------->
<section class="blog-head">
    <div class="top-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="main-title-blog">
                        <h4>Our Latest Articles</h4>
                        <h1>Our Blog & News</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------end----contact--head----->

<!------start----blog-details------>
<section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="row justify-content-center">
                        @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="blog_post mb-md-4 mb-3 animation animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="0.3s" style="animation-delay: 0.3s; opacity: 1;">
                                <div class="blog_img">
                                    <a href="{{route('blog',['id' => $blog->slug ])}}">
                                        <img src="{{ asset($blog->image ?? '')}}" alt="blog_small_img1">
                                    </a>
                                </div>
                                <div class="blog_content">
                                    <h5 class="blog_title"><a href="{{route('blog',['id' => $blog->slug ])}}">{{$blog->name ?? '' }}</a>
                                    </h5>
                                  
                                    <p>{{ $blog->shortdesc ?? '' }}</p>
                                    <a href="{{route('blog',['id' => $blog->slug])}}" class="blog_link text-decoration-none">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                  
                    
                </div>
            </div>
        </section>
        <!-- Blog Details Area -->


</x-guest-layout>