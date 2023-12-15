<x-app-layout>
<div class="main-content">
        <section class="section">
          <div class="section-body">
          
          
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Setting</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{route('setting.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                   
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="file" class="form-control" name="logo" id="imageInput" accept="image/*" onchange="previewImage()">
                            <img id="imagePreview" src="{{asset($setting->logo ?? '')}}" alt="Image Preview" style="max-width: 100%; max-height: 150px;">
                        </div>
                    </div>
                  

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer About </label>
                      <div class="col-sm-12 col-md-7">
                      <textarea class="summernote" name="footer_about">{{ $setting->footer_about ?? ''}}</textarea>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mobile</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="text" name="mobile" class="form-control" id="mobile" value="{{ $setting->mobile ?? '' }}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="email" name="email" class="form-control" id="email" value="{{ $setting->email ?? '' }}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Coppyright</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="text" name="coppyright" class="form-control" id="coppyright" value="{{ $setting->coppyright ?? '' }}">
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Facebook</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="text" name="facebook" class="form-control" id="facebook" value="{{ $setting->facebook ?? '' }}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Twitter</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="text" name="twitter" class="form-control" id="twitter" value="{{ $setting->twitter ?? '' }}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Google</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="text" name="google" class="form-control" id="google" value="{{ $setting->google ?? '' }}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Instagram</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="text" name="instagram" class="form-control" id="instagram" value="{{ $setting->instagram ?? '' }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pinterest</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="text" name="pinterest"  class="form-control" id="pinterest" value="{{ $setting->pinterest ?? '' }}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Whatsapp</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="text" name="whatsapp" class="form-control" id="whatsapp" value="{{ $setting->whatsapp ?? '' }}">
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