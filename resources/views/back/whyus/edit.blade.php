<x-app-layout>
<div class="main-content">
        <section class="section">
          <div class="section-body">
          
          
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Why Choose Us</h4>
                  </div>
                  <div class="card-body">
                    <form action=" {{ route('whyus.update', ['whyu' => $whyus->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                        @csrf
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title" value="{{$whyus->title ?? ''}}">
                      </div>
                    </div>
                   
                    <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
        <div class="col-sm-12 col-md-7">
            <input type="file" class="form-control" name="image" id="imageInput" accept="image/*" onchange="previewImage()">
            <img id="imagePreview" src="{{ asset($whyus->image) }}" alt="Image Preview" style="max-width: 100%; max-height: 150px; display: block;">
        </div>
    </div>

                

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description </label>
                      <div class="col-sm-12 col-md-7">
                       <textarea  name="description" class="summernote" > {!! $whyus->description ?? '' !!}</textarea>
                      </div>
                    </div>


                  
                    <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
        <div class="col-sm-12 col-md-7">
            <select class="form-control selectric" name="status">
                <option value="1" {{ $whyus->status == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $whyus->status == 0 ? 'selected' : '' }}>Deactive</option>
            </select>
        </div>
    </div>

    <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Display Order</label>
        <div class="col-sm-12 col-md-7">
            <input type="number" class="form-control" name="order" value="{{ $whyus->order }}">
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
</script>
</x-app-layout>