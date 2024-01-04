<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">


        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                <a href="{{ route('banner.index') }}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i> Back to Banners
                </a>
             <h4>Edit Banner</h4> 
              </div>
              <div class="card-body">
                <form action="{{ route('banner.update', ['banner' => $Banner->id]) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control" name="title" value="{{ $Banner->title }}">
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control" name="image" id="imageInput" accept="image/*" onchange="previewImage()">
                      <img id="imagePreview" src="{{ asset($Banner->image) }}" alt="Image Preview" style="max-width: 100%; max-height: 150px; display: block;">
                    </div>
                  </div>
                  
                     <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mobile Image</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="file" class="form-control" name="mobile_image" id="mobileImageInput" accept="image/*" onchange="mobilePreviewImage()">
                            <img id="mobileImagePreview" src="{{ asset($Banner->mobile_image ) }}" alt="Image Preview" style="max-width: 100%; max-height: 150px; display: block;">
                        </div>
                    </div>
                    

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">link</label>
                    <div class="col-sm-12 col-md-7">
                      <textarea name="link" class="form-control">{{ $Banner->link }}</textarea>
                    </div>
                  </div>

               

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                    <div class="col-sm-12 col-md-7">
                      <select class="form-control selectric" name="status">
                        <option value="1" {{ $Banner->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $Banner->status == 0 ? 'selected' : '' }}>Deactive</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Display Order</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="order" value="{{ $Banner->order }}">
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary" type="submit">Update</button>
                       <a href="{{ route('banner.index') }}" class="btn btn-success">
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
    $(document).ready(function() {
      $('.ckeditor').summernote();
    });

    function previewImage() {
      var input = document.getElementById('imageInput');
      var preview = document.getElementById('imagePreview');

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
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