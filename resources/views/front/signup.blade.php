<x-guest-layout>
<!-----start--signup---head-------->
<section class="contact-head">
    <div class="top-contact">
        <div class="container">
            <div class="row">
                <div class="main-title-cont">
                    <h4>SIGNUP</h4>
                    <h1>JOIN NOW</h1>
                </div>
            </div>
        </div>
    </div>

</section>
<!------end----signup--head----->

<!------start---signup--form----->
<section class="signup-form-sec">
    <div class="container">
        <div class="row align-items-md-center">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="form-left-signup">
                        <form class="tbl-signup-info row"> 
                        <div class="col-lg-6 col-md-6 col-12 col-sm-12" >
                          <div class="form-group">
                            <input type="text"  required data-error="Enter Name" placeholder="Name *" class="form-control" required="" />
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-12" >
                        
                          <div class="form-group">
                          <input type="text"  required data-error="Enter Phone No." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Mobile *"  class="form-control" maxlength="10" required="" /></div>
                          </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-12" >
                            <div class="form-group">
                            <input type="email"  required data-error="Enter Your Email" placeholder="Email *" class="form-control" required=""  />
                          </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12 col-sm-12" >
                            <div class="form-group">
                            <input type="text"  required data-error="Enter Your City" placeholder="City" class="form-control"  />
                          </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-12 col-sm-12" >
                            <div class="form-group">
                                <label class="position-relative w-100"  >
                            <input type="date"  required data-error="Enter Your DOB" placeholder="DOB" class="form-control dob" required  />
                            <span class="upl_pdf">Date Of Birth</span>
                            </label>
                          </div>
                         </div>
                         
                            <div class="col-lg-12 col-md-12 col-12 col-sm-12" >
                                <div class="form-group">
                                    <textarea  required data-error="Enter Your Address" placeholder="Health issue" rows="4" cols="50"  class="form-control"  ></textarea>
                                </div>
                            </div>

                             <div class="col-lg-12 col-md-12 col-12 col-sm-12" >
                                <button type="submit" title="Subscribe" name="submit" value="Submit"  class="btn btn-default submit-btn action-button animation animated fadeInUp" >Register <img src="assets/images/icons/right-arrow-btn.png" class="btn-icn"></button>
                            </div>
                 
                </form>
            </div>
        </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="right-img-signup">
                <img src="assets/images/female-2027987_1920.png?v=0.1">
               </div> 
            </div>
        </div> 
    </div>
</section>
<!------end----signup--form----->
</x-guest-layout>