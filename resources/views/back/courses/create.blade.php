<x-app-layout>
    <style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
  <div class="main-content">
    <section class="section">
      <div class="section-body">


        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                <a href="{{ route('courses.index') }}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i> Back to Courses
                </a>
             <h4>Create Course</h4> 
              </div>
              <div class="card-body">
                <form action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  
                      <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Trainer</label>
                    <div class="col-sm-12 col-md-7">
                     <select class="form-control selectric @error('trainer_id') is-invalid @enderror" name="trainer_id">
                    <option disabled selected>Select Trainer</option>
                    @foreach($trainer as $tra)
                        <option value="{{ $tra->id }}" {{ old('trainer_id') == $tra->id ? 'selected' : '' }}>
                            {{ $tra->name }}
                        </option>
                    @endforeach
                </select>
                @error('trainer_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                    </div>
                  </div>
<!--               <div class="form-row">-->
    <!--<div class="col-md-6">-->
    <!--    <div class="form-group row mb-4">-->
    <!--       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>-->
    <!--        <div class="col-sm-12 col-md-9">-->
    <!--            <lable class="col-form-label">Category</lable>-->
    <!--            <select class="form-control selectric @error('category_id') is-invalid @enderror" name="category_id">-->
    <!--                <option disabled selected>Select Category</option>-->
    <!--                @foreach($category as $cat)-->
    <!--                    <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>-->
    <!--                        {{ $cat->name }}-->
    <!--                    </option>-->
    <!--                @endforeach-->
    <!--            </select>-->
    <!--            @error('category_id')-->
    <!--            <span class="invalid-feedback" role="alert">-->
    <!--                <strong>{{ $message }}</strong>-->
    <!--            </span>-->
    <!--            @enderror-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

<!--    <div class="col-md-6">-->
<!--        <div class="form-group row mb-4">-->
<!--            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Trainer</label>-->
<!--            <div class="col-sm-12 col-md-9">-->
                
<!--                <select class="form-control selectric @error('trainer_id') is-invalid @enderror" name="trainer_id">-->
<!--                    <option disabled selected>Select Trainer</option>-->
<!--                    @foreach($trainer as $tra)-->
<!--                        <option value="{{ $tra->id }}" {{ old('trainer_id') == $tra->id ? 'selected' : '' }}>-->
<!--                            {{ $tra->name }}-->
<!--                        </option>-->
<!--                    @endforeach-->
<!--                </select>-->
<!--                @error('trainer_id')-->
<!--                <div class="invalid-feedback">{{ $message }}</div>-->
<!--                @enderror-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->



                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="imageInput" accept="image/*" onchange="previewImage()">
                      <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 100%; max-height: 150px; display: none;">

                      @error('image')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <!--<div class="form-group row mb-4">-->
                  <!--  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon</label>-->
                  <!--  <div class="col-sm-12 col-md-7">-->
                  <!--    <input type="file" class="form-control @error('icon') is-invalid @enderror" name="icon" id="iconInput" accept="image/*" onchange="previewIcon()">-->
                  <!--    <img id="iconPreview" src="#" alt="Image Preview" style="max-width: 100%; max-height: 150px; display: none;">-->

                  <!--    @error('image')-->
                  <!--    <div class="invalid-feedback d-block">{{ $message }}</div>-->
                  <!--    @enderror-->
                  <!--  </div>-->
                  <!--</div>-->


                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short Desc</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration') }}">
                      @error('duration')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No of Lecture</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control @error('no_of_lecture') is-invalid @enderror" name="no_of_lecture" value="{{ old('no_of_lecture') }}">
                      @error('no_of_lecture')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
               
                 

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Month wise Price </label>
                    <div class="col-sm-12 col-md-7">
                      <div id="monthprice">
                        @foreach(old('months', ['']) as $index => $months)
                        <div class="month-price d-flex">
                          <input type="number" class="form-control" name="months[]" value="{{ $months }}" placeholder="Enter Month here">
                          <span class="m-2"> On </span>
                          <input type="number" class="form-control" name="price[]" value="{{ old('price.' . $index, '') }}" placeholder="Enter Price here" >
                          <button type="button" class="btn btn-sm btn-danger remove-month-price m-2">Remove</button>
                        </div>
                        @endforeach
                      </div>
                      <button type="button" class="btn btn-sm btn-primary" id="addmonthpriuce">Add Month Price</button>

                      @error('start_times')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror

                      @error('end_times')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">One to One price </label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control @error('oto_price') is-invalid @enderror" name="oto_price" value="{{ old('oto_price') }}">
                      @error('oto_price')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>


                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short Desc</label>
                    <div class="col-sm-12 col-md-7">
                      <textarea class="form-control @error('short_desc') is-invalid @enderror" name="short_desc" value="">{{ old('short_desc') }}</textarea>
                      @error('duration')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                    <div class="col-sm-12 col-md-7">
                      <textarea class="summernote form-control @error('desc') is-invalid @enderror" name="desc">{{ old('desc') }}</textarea>
                      @error('desc')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Days <br> (select mutiple on control + click)</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2 " style="height:150px" name="days[]" multiple="multiple">
                                <option value="Monday"  selected class="m-2 p-2" >Monday</option>
                                <option value="Tuesday"selected class="m-2 p-2">Tuesday</option>
                                <option value="Wednesday"  selected class="m-2 p-2">Wednesday</option>
                                <option value="Thursday"selected class="m-2 p-2">Thursday</option>
                                <option value="Friday" selected class="m-2 p-2">Friday</option>
                                <option value="Saturday"   class="m-2 p-2">Saturday</option>
                                <option value="Sunday"  class="m-2 p-2">Sunday</option>
                            </select>
                            @error('days')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

             
                <div class="form-group row mb-4" id="batch-container">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Batch wise no of Seats</label>
                    <div class="col-sm-12 col-md-7">
                        <div id="batchandlimit">
                            <div class="month-price d-flex batch">
                                <select name="batchs[]" class="form-control">
                                    <option value="" disabled>Select Batch</option>
                                    @foreach($batchs as $batchOption)
                                        <option value="{{ $batchOption->id }}">
                                            {{ \Carbon\Carbon::parse($batchOption->start)->format('h:i A') }} to
                                            {{ \Carbon\Carbon::parse($batchOption->end)->format('h:i A') }}  
                                            ({{ \Carbon\Carbon::parse($batchOption->start)->diff(\Carbon\Carbon::parse($batchOption->end))->format('%hh %im') }})
                                        </option>
                                    @endforeach
                                </select>
                                <span class="m-2"> OF </span>
                                <input type="number" class="form-control" name="no_of_seats[]" placeholder="Enter Seat here">
                                <button type="button" class="btn btn-sm btn-danger remove-batch m-2">Remove</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary" id="addbatch">Add Batch and Seat</button>
                
                        @error('batchs')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                
                        @error('no_of_seats')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Zoom Link</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control" name="zoom_link" value="{{ old('zoom_link')}}">
                    </div>
                  </div>


                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                    <div class="col-sm-12 col-md-7">
                      <select class="form-control selectric" name="status">
                        <option value="1"selected >Active</option>
                        <option value="0" >DeActive</option>
                      </select>

                      @error('status')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control" name="slug">
                      </div>
                    </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Display Order</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="order" value="{{ old('order')}}">
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary" type="submit">Publish</button>
                       <a href="{{route('courses.index')}}" class="btn btn-success">Cancel</a>
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

  

    document.getElementById('addmonthpriuce').addEventListener('click', function() {
      var timeRangesContainer = document.getElementById('monthprice');
      var newTimeRange = document.querySelector('.month-price').cloneNode(true);

      // Clear the values in the new time range
      newTimeRange.querySelectorAll('input[type="number"]').forEach(function(input) {
        input.value = '';
      });

      // Add the new time range
      timeRangesContainer.appendChild(newTimeRange);
    });

    document.addEventListener('click', function(event) {
      if (event.target.classList.contains('remove-month-price')) {
        event.target.closest('.month-price').remove();
      }
    });


    function previewIcon() {
    var input = document.getElementById('iconInput');
    var preview = document.getElementById('iconPreview');
    var reader = new FileReader();

    reader.onload = function (e) {
      preview.src = e.target.result;
      preview.style.display = 'block';
    };

    if (input.files && input.files[0]) {
      reader.readAsDataURL(input.files[0]);
    }
  }


  $(document).ready(function () {
        // Add time range
        $("#addTimeRange").click(function () {
            var clone = $(".time-range:first").clone();
            clone.find('input, select').val('');
            clone.find('.remove-time-range').show();
            $("#timeRanges").append(clone);
        });

        // Remove time range
        $("#timeRanges").on("click", ".remove-time-range", function () {
            $(this).closest(".time-range").remove();
        });
    });

 $(document).ready(function() {
        // Add Batch button click
        $('#addbatch').on('click', function() {
            var clone = $('.batch:first').clone();
            var select = clone.find('select[name="batchs[]"]');
            var selectedOptions = $('#batch-container select[name="batchs[]"]').map(function() {
                return $(this).val();
            }).get();

            // Remove previously selected options from the cloned select
            select.find('option').each(function() {
                var optionValue = $(this).val();
                if (selectedOptions.includes(optionValue)) {
                    $(this).remove();
                }
            });

            // Append the cloned batch to the container
            clone.find('input[name="no_of_seats[]"]').val('');
            clone.appendTo('#batchandlimit');
        });

        // Remove Batch button click (using event delegation)
        $('#batchandlimit').on('click', '.remove-batch', function() {
            $(this).closest('.batch').remove();
        });
    });
  </script>
</x-app-layout>