<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">


        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                <a href="{{ route('banner.index') }}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i> Back to Batchs
                </a>
             <h4>Edit Batch</h4> 
              </div>
              <div class="card-body">
                <form action="{{ route('batch.update', ['batch' => $batch->id]) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Start Time</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="time" class="form-control" name="start" value="{{ $batch->start }}">
                    </div>
                  </div>
                   <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">End Time</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="time" class="form-control" name="end" value="{{ $batch->end }}">
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                    <div class="col-sm-12 col-md-7">
                      <select class="form-control selectric" name="status">
                        <option value="1" {{ $batch->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $batch->status == 0 ? 'selected' : '' }}>Deactive</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Display Order</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="order" value="{{ $batch->order }}">
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary" type="submit">Update</button>
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