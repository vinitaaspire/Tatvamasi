<x-guest-layout>
    <!-----start--contact---head-------->
<section class="contact-head">
    <div class="top-contact">
        <div class="container">
            <div class="row">
                <div class="main-title-cont">
                    <h4>Contact Us</h4>
                    <h1>GET IN TOUCH</h1>
                </div>
            </div>
        </div>
    </div>

</section>
<!------end----contact--head----->

<!------start----contact--boxes----->
<section class="three-box-cont d-md-block">
    <div class="container">
        <div class="row">
           <div class="col-lg-4 offset-lg-2 col-sm-12">
             
                    <div class="contact-box box_shadow4 text-center contact-box_style1 animation" data-animation="fadeInRight"
                        data-animation-delay="0.3s">
                        <div class="contact-icon">
                            <img src="{{ asset('front/assets/images/exchange-mails.png')}}">
                        </div>
                        <div class="contact-desc">
                            <h5>EMAIL</h5>
                            <p>{{getSetting()->email ?? ''}}</p>
                        </div>
                    </div>
                </div>
               <div class="col-lg-4 d-none col-sm-12">
                
                    <div class="contact-box box_shadow4 text-center contact-box_style1 animation" data-animation="fadeInRight"
                        data-animation-delay="0.3s">
                        <div class="contact-icon">
                           <img src="{{asset('front/assets/images/map.png')}}">
                        </div>
                        <div class="contact-desc">
                            <h5>ADDRESS</h5>
                            <p>Unitech Arcadia, Sec-49, Gurugram</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                     
                    <div class="contact-box box_shadow4 text-center contact-box_style1 animation" data-animation="fadeInRight"
                        data-animation-delay="0.3s">
                        <div class="contact-icon">
                            <img src="{{asset('front/assets/images/video-call.png')}}">
                        </div>
                        <div class="contact-desc">
                            <h5>CALL</h5>
                            <p>{{getSetting()->mobile ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!------end----contact--boxess----->


<!------start---contact--form----->
<section class="contact-form-sec mt-md-0 pt-md-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                
            <form class="tbl-contact-info row" method="POST" action="{{ route('contact.save') }}">
    @csrf
    <div class="col-lg-6 col-md-6 col-12 col-sm-12">
        <div class="form-group">
            <input type="text" name="name" required data-error="Enter Name" placeholder="Name" class="form-control">
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-12 col-sm-12">
        <div class="form-group">
            <input type="text" name="phone_number" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone Number" class="form-control">
        </div>
    </div>

    <div class="col-lg-12 col-md-6 col-12 col-sm-12">
        <div class="form-group">
            <input type="email" name="email" required data-error="Enter Your Email" placeholder="Email" class="form-control">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="form-group">
            <textarea name="address" required data-error="Enter Your Address" placeholder="Enter Address" rows="4" cols="50" class="form-control"></textarea>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <button type="submit" title="Subscribe" name="submit" value="Submit" class="btn btn-default submit-btn action-button animation animated fadeInUp">Submit <img src="{{ asset('front/assets/images/icons/right-arrow-btn.png') }}" class="btn-icn"></button>
    </div>
</form>

            </div>
        </div>
        
    </div>
</section>
<!------end----contact--form----->


</x-guest-layout>