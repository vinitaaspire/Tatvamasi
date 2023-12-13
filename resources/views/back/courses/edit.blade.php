<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">


        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Edit Courses</h4>
              </div>
              <div class="card-body">
                <form action="{{route('courses.update', ['course' => $courses->id])}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $courses->name }}">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                    <div class="col-sm-12 col-md-7">
                      <select class="form-control selectric @error('category_id') is-invalid @enderror" name="category_id">
                        <option disabled selected>Select Category</option>
                        @foreach($category as $cat)
                        <option value="{{ $cat->id }}" {{ $courses->category_id == $cat->id ? 'selected' : '' }}>
                          {{ $cat->name }}
                        </option>
                        @endforeach
                      </select>
                      @error('category_id')
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
                        <option value="{{ $tra->id }}" {{ $courses->trainer_id == $tra->id ? 'selected' : '' }}>
                          {{ $tra->name }}
                        </option>
                        @endforeach
                      </select>

                      @error('trainer_id')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>


                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="imageInput" accept="image/*" onchange="previewImage()">
                      <img id="imagePreview" src="{{ asset($courses->image )}}" alt="Image Preview" style="max-width: 100%; max-height: 150px;">

                      @error('image')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Duration In Months</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ $courses->duration }}">
                      @error('duration')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No of Lecture</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control @error('no_of_lecture') is-invalid @enderror" name="no_of_lecture" value="{{ $courses->no_of_lecture }}">
                      @error('no_of_lecture')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" step="0.00" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $courses->price }}">
                      @error('price')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                    <div class="col-sm-12 col-md-7">
                      <textarea class="summernote form-control @error('desc') is-invalid @enderror" name="desc">{{ $courses->desc }}</textarea>
                      @error('desc')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>



                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Days</label>
                    <div class="col-sm-12 col-md-7 border m-2 p-2">

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="selectAllDays" name="select_all_days" {{ old('select_all_days', $courses->select_all_days) ? 'checked' : '' }}>
                        <label class="form-check-label text-success" for="selectAllDays">Select All</label>
                      </div>

                      @php
                      $selectedDays = old('days', explode(',', $courses->days));
                      @endphp

                      @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $index => $day)
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="days[]" value="{{ $index + 1 }}" id="day{{ $index + 1 }}" {{ in_array($index + 1, $selectedDays) ? 'checked' : '' }}>
                        <label class="form-check-label" for="day{{ $index + 1 }}">{{ $day }}</label>
                      </div>
                      @endforeach

                      @error('days')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror

                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Timing</label>
                    <div class="col-sm-12 col-md-7">
                      <div id="timeRanges">
                        @php
                        $timingArray = explode(', ', $courses->timeing); // 04:02 - 15:08, 10:49 - 10:50
                        $oldStartTimes = old('start_times', []);
                        $oldEndTimes = old('end_times', []);

                        @endphp

                        @foreach($timingArray as $index => $time)
                        @php
                        list($startTime, $endTime) = explode(' - ', $time);
                        @endphp
                        <div class="time-range d-flex">
                          <input type="time" class="form-control" name="start_times[]" value="{{ $startTime }}">
                          <span class="m-2">To </span>
                          <input type="time" class="form-control" name="end_times[]" value="{{ $endTime }}">
                          <button type="button" class="btn btn-sm btn-danger remove-time-range m-2">Remove</button>
                        </div>
                        @endforeach

                     

                      </div>

                      <button type="button" class="btn btn-sm btn-primary" id="addTimeRange">Add Time Range</button>

                      @error('start_times')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror

                      @error('end_times')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>







                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                    <div class="col-sm-12 col-md-7">
                      <select class="form-control selectric" name="status">
                        <option value="1" {{ $courses->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $courses->status == 0 ? 'selected' : '' }}>DeActive</option>
                      </select>

                      @error('status')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Display Order</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="order" value="{{ $courses->order }}">
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary" type="submit">Publish</button>
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

    document.getElementById('selectAllDays').addEventListener('change', function() {
      var checkboxes = document.querySelectorAll('[name="days[]"]');
      checkboxes.forEach(function(checkbox) {
        checkbox.checked = document.getElementById('selectAllDays').checked;
      });
    });


    document.getElementById('addTimeRange').addEventListener('click', function() {
      var timeRangesContainer = document.getElementById('timeRanges');
      var newTimeRange = document.querySelector('.time-range').cloneNode(true);

      // Clear the values in the new time range
      newTimeRange.querySelectorAll('input[type="time"]').forEach(function(input) {
        input.value = '';
      });

      // Add the new time range
      timeRangesContainer.appendChild(newTimeRange);
    });

    document.addEventListener('click', function(event) {
      if (event.target.classList.contains('remove-time-range')) {
        event.target.closest('.time-range').remove();
      }
    });
  </script>
</x-app-layout>