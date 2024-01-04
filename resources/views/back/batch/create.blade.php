<x-app-layout>
<div class="main-content">
        <section class="section">
          <div class="section-body">
          
          
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                <a href="{{ route('batch.index') }}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i> Back to Batchs
                </a>
             <h4>Create Batch</h4> 
              </div>
                  <div class="card-body">
                    <form action="{{route('batch.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Start Time</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="time" class="form-control" name="start">
                      </div>
                    </div>
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">End Time</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="time" class="form-control" name="end" >
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
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Display Order</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="order">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary"  type="submit" >Publish</button>
                      <a href="{{ route('batch.index') }}" class="btn btn-success">
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
 
    function previewImage(value) {
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
    
      function mobilePreviewImage(value) {
        var input = document.getElementById('mobileImageInput');
        var preview = document.getElementById('mobileImagePreview');

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