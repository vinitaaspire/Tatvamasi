<x-app-layout>
<div class="main-content">
        <section class="section">
          <div class="section-body">
          
          
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                <a href="{{ route('coupon.index') }}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i> Back to Coupon
                </a>
             <h4>Edit Coupon</h4> 
              </div>
                  <div class="card-body">
                  
                         <form action="{{route('coupon.update',['coupon' => $coupon->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                         @method('PATCH')
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Coupon</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="coupon" value="{{ $coupon->coupon ?? ''}}">
                      </div>
                    </div>
                   
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Min Value</label>
                      <div class="col-sm-12 col-md-7">
                       <input type="number" name="min_value" id="min_value" class="form-control " value="{{ $coupon->min_value ?? ''}}">
                      </div>
                    </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Discount Flat</label>
                      <div class="col-sm-12 col-md-7">
                       <input type="number" name="discount_price" id="discount_price" class="form-control " value="{{ $coupon->discount_price ?? ''}}">
                      </div>
                    </div>
                         <div class="form-group row mb-4">
                         or
                         </div>
                       <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Percent %</label>
                      <div class="col-sm-12 col-md-7">
                       <input type="number" name="percent_price" id="percent_price" class="form-control " value="{{ $coupon->percent_price ?? ''}}">
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Start Date</label>
                      <div class="col-sm-12 col-md-7">
                       <input type="date" name="start_date" id="start_date" class="form-control " value="{{ $coupon->start_date ?? ''}}">
                      </div>
                    </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">End Date</label>
                      <div class="col-sm-12 col-md-7">
                       <input type="date" name="end_date" id="end_date" class="form-control " value="{{ $coupon->end_date ?? ''}}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="status">
                          <option value="1">Active</option>
                          <option value="0">DeActive</option>
                        
                        </select>
                      </div>
                    </div>
                  

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary"  type="submit" >Publish</button>
                         <a href="{{ route('coupon.index') }}" class="btn btn-success">
                   Cancel
                </a>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </section>
      
      </div>


<script>
 
    function previewImage() {
        var input = document.getElementById('imageInput');
        var preview = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }
</script>
</x-app-layout>