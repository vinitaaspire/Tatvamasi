<x-app-layout>
<div class="main-content">
        <section class="section">
          <div class="section-body">
          
          
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Trainer</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('trainers.update', ['trainer' => $trainer->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                        @csrf
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" value="{{$trainer->name ?? ''}}">
                      </div>
                    </div>
                   
                    <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
        <div class="col-sm-12 col-md-7">
            <input type="file" class="form-control" name="image" id="imageInput" accept="image/*" onchange="previewImage()">
            <img id="imagePreview" src="{{ asset($trainer->image) }}" alt="Image Preview" style="max-width: 100%; max-height: 150px; display: block;">
        </div>
    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Designation</label>
                      <div class="col-sm-12 col-md-7">
                       <input type="text" name="designation" id="" class="form-control " value="{{$trainer->designation ?? ''}}" >
                      </div>
                    </div>

                   


                  
                    <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
        <div class="col-sm-12 col-md-7">
            <select class="form-control selectric" name="status">
                <option value="1" {{ $trainer->status == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $trainer->status == 0 ? 'selected' : '' }}>Deactive</option>
            </select>
        </div>
    </div>

    <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Display Order</label>
        <div class="col-sm-12 col-md-7">
            <input type="number" class="form-control" name="order" value="{{ $trainer->order }}">
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