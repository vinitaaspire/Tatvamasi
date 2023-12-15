<x-guest-layout>
    <!-----start--contact---head-------->
    <section class="blog-head">
        <div class="top-blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="main-title-blog">
                            <h4>Blogs</h4>
                            <h1>{{ $blog->name ?? ''}}</h1>
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
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details">
                        <div class="blog-detail-img">
                            <img src="{{ asset($blog->image ?? '' )}}" alt="details">

                            <div class="date">
                                <span>{{ optional($blog->created_at)->format('M Y') ?? '' }}</span>
                            </div>
                        </div>

                        <div class="blog-details-heading">
                            <h3><strong>{{ $blog->name ?? ''}}</strong></h3>

                        </div>

                        <div class="blog-details-content">
                            <p>{!! $blog->longdesc ?? '' !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="side-bar mb-0">


                        <div class="widget-box recent-post-box mb-0">
                            <h3 class="title">Related Blogs</h3>

                            <ul>
                                @foreach($blogs as $list)
                                <li>
                                    <div class="recent-post-thumb">
                                        <a href="{{ route('blog',['id' => $list->slug ])}}"><img src="{{ asset($list->image) }}" alt="pic"></a>
                                    </div>

                                    <div class="recent-post-desc">
                                        <h3><a href="{{ route('blog',['id' => $list->slug ])}}">{{$list->name }}</a></h3>
                                        <span class="date">{{ optional($list->created_at)->format('M Y') ?? '' }}</span>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Blog Details Area -->
</x-guest-layout>