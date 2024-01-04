<x-app-layout>
<div class="main-content">
        <section class="section">
          <div class="section-body">
          
          
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Trial Class </h4>
                  </div>
                  <div class="card-body">
                    <form action="{{route('trial.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title </label>
                      <div class="col-sm-12 col-md-7">
                      <textarea class="summernote" name="title">{{ $trial->title ?? ''}}</textarea>
                      </div>
                    </div>
                  
                  

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description </label>
                      <div class="col-sm-12 col-md-7">
                      <textarea class="summernote" name="description">{{ $trial->description ?? ''}}</textarea>
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price </label>
                      <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="price" id="price" value="{{ $trial->price ?? ''}}" >
                      </div>
                    </div>
                    
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">days </label>
                      <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="days" id="days" value="{{ $trial->days ?? ''}}" >
                      </div>
                    </div>
                    
                    
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status </label>
                      <div class="col-sm-12 col-md-7">
                       <select name="status" class="form-control">
                           <option @if($trial->status == 1) selected @endif  value="1">Active</option>
                             <option  @if($trial->status == 0 ) selected @endif  value="0">Unactive</option>
                       </select>
                      </div>
                    </div>
                    

         

                  

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary"  type="submit" >Publish</button>
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

    $(document).ready(function() {
    // Listen for file input changes
    $('#imageInputs').on('change', function() {
      // Clear previous previews
      $('#imagePreviews').html('');

      // Loop through selected files
      for (let i = 0; i < this.files.length; i++) {
        const reader = new FileReader();

        // Read and display each selected image
        reader.onload = function(e) {
          $('#imagePreviews').append('<img src="' + e.target.result + '" alt="Image Preview" style="max-width: 100px; max-height: 100px; margin-right: 10px;">');
        };

        reader.readAsDataURL(this.files[i]);
      }
    });
  });

</script>

</x-app-layout>