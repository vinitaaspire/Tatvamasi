<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">


        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <a href="{{ route('pricing.index') }}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i> Back to Pricings
                </a>
             <h4>Edit Pricing</h4> 
              </div>
              <div class="card-body">
                <form action="{{ route('pricing.update', ['pricing' => $price->id]) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Month</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="month" value="{{ $price->month ?? '' }}">
                      @error('month')
            <span class="text-danger">{{ $message }}</span>
        @enderror
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gross Price </label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="gross_price" value="{{ $price->gross_price ?? '' }}">
                      @error('gross_price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price </label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="price" value="{{ $price->price ?? '' }}" >
                      @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
                    </div>
                  </div>

                  <div id="descriptionRepeater">
                    <div class="form-group row mb-4 description-row">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea type="text" class="form-control" name="description">{{ $price->description ?? ''}}</textarea>
                        <span> write , for next line </span>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                     
                    </div>
                  </div>
                  
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Best Value</label>
                    <div class="col-sm-12 col-md-7">
                      <div class="form-check">
                        <input type="hidden" name="best_value" value="0"> <!-- Hidden input for the default value (0) -->
                        <input type="checkbox" name="best_value" value="1" @if($price->best_value == 1) checked @endif>


                        <label class="form-check-label" for="bestValueCheckbox">Check if best value</label>
                        @error('best_value')
            <span class="text-danger">{{ $message }}</span>
        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
        <div class="col-sm-12 col-md-7">
            <select class="form-control selectric" name="status">
                <option value="1" {{ $price->status == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $price->status == 0 ? 'selected' : '' }}>Deactive</option>
            </select>
        </div>
    </div>

    <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Display Order</label>
        <div class="col-sm-12 col-md-7">
            <input type="number" class="form-control" name="order" value="{{ $price->order }}">
        </div>
    </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary" type="submit">Publish</button>
                       <a href="{{ route('pricing.index') }}" class="btn btn-success">
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


    $(document).ready(function() {
      // Add Description Row
      $("#addDescriptionRow").on("click", function() {
        var $clonedRow = $(".description-row:first").clone();
        $clonedRow.find('input').val(''); // Clear the input value in the cloned row
        $("#descriptionRepeater").append($clonedRow);
      });

      // Remove Description Row
      $(document).on("click", ".remove-description-row", function() {
        $(this).closest(".description-row").remove();
      });
    });
  </script>

</x-app-layout>