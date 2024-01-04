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
                                <h2>Payment History</h2>
                            </div>
                        </div>
                        <div class="profile-form profile-form-table">
                            <table class="w-100 table" >
                                <thead>
                                    <tr>
                                        <th class="text-nowrap" >Order ID</th>
                                        <th  >Date</th>
                                        <th >Amount</th>
                                        <th class="text-nowrap">Payment Status</th>
                                        <th>Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--<tr>-->
                                    <!--    <td>79102</td>-->
                                    <!--    <td class="text-nowrap" >12-12-2023</td>-->
                                    <!--    <td><i class="las la-rupee-sign"></i>1899</td>-->
                                    <!--    <td class="d-flex align-items-center border-bottom-0" ><span class="badge bg-success" >Paid</span></td>-->
                                    <!--    <td><i class="las la-download"></i></td>-->
                                    <!--</tr>-->
                                    <!--<tr>-->
                                    <!--    <td>79101</td>-->
                                    <!--    <td class="text-nowrap" >12-12-2023</td>-->
                                    <!--    <td class="d-flex align-items-center border-bottom-0"  ><i class="las la-rupee-sign"></i>2894</td>-->
                                    <!--    <td><span class="badge bg-success" >Paid</span></td>-->
                                    <!--    <td><i class="las la-download"></i></td>-->
                                    <!--</tr>-->
                                    <!--<tr>-->
                                    <!--    <td>79052</td>-->
                                    <!--    <td class="text-nowrap" >12-12-2023</td>-->
                                    <!--    <td class="d-flex align-items-center border-bottom-0"  ><i class="las la-rupee-sign"></i>1200</td>-->
                                    <!--    <td><span class="badge bg-danger" >Cancelled</span></td>-->
                                    <!--    <td><i class="las la-download"></i></td>-->
                                    <!--</tr>-->
                                    <!--<tr>-->
                                    <!--    <td>79021</td>-->
                                    <!--    <td class="text-nowrap" >12-12-2023</td>-->
                                    <!--    <td class="d-flex align-items-center border-bottom-0"  ><i class="las la-rupee-sign"></i>1499</td>-->
                                    <!--    <td><span class="badge bg-warning" >Pending</span></td>-->
                                    <!--    <td><i class="las la-download" dowload="download" ></i></td>-->
                                    <!--</tr>-->

                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
</x-guest-layout>
