<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4>Enquiry </h4>
                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-info"></i></button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped"  id="table-1" >
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Name </th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Batch</th>
                        <th>City</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($contact_enquiry as $key => $list)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $list->name ?? ''}}</td>
                        <td>{{ $list->mobile ?? ''}} </td>
                        <td>{{ $list->email ?? '' }}</td>
                        <td>{{ $list->courses->name ?? '' }}</td>
                       <td>
    @php
        $batchData = json_decode($list->batch);
    @endphp

    @if($batchData)
        <p><strong>Days:</strong> {{ $batchData->days ?? '' }}</p>
        <p><strong>Start Time:</strong> {{ $batchData->start_time ?? '' }}</p>
        <p><strong>End Time:</strong> {{ $batchData->end_time ?? '' }}</p>
    @else
        No batch data available
    @endif
</td>

                        <td>
                          {{ $list->city ?? '' }}
                          <!--<form id="deleteForm{{ $list->id }}" action="{{ route('contactUs.destroy', ['contactU' => $list->id]) }}" method="POST" class="d-inline">-->
                          <!--  @csrf-->
                          <!--  @method('DELETE')-->
                          <!--  <button type="button" onclick="confirmDelete({{ $list->id }})" class="delete badge badge-danger btn btn-danger">Delete</button>-->
                          <!--</form>-->



                        </td>
                      </tr>
                      @endforeach
                    </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  </div>
  
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               <form class="form" action="{{route('about.store')}}" method="post">
                   @csrf
                   @php
                      $name = 'enquiry';
                      $data = App\Models\About::where('module',$name )->first();
                   @endphp
                   <input type="hidden" name="module" value="{{$name}}">
                   <div class="form-group">
                       <lable>Name</lable>
                       <input type="text" name="name" placeholder="Enter Name Here ... " value="{{$data->name ?? '' }}" class="form-control">
                   </div>
                     <div class="form-group">
                       <lable>Title</lable>
                       <input type="text" name="title" placeholder="Enter Title Here ... " value="{{$data->title ?? '' }}"  class="form-control">
                   </div>
                    <div class="form-group">
                       <lable>Description</lable>
                       <textarea  name="shortdesc" placeholder="Enter Discription Here ... "class="form-control" >{{$data->shortdesc ?? '' }}</textarea>
                   </div>
                     <div class="form-group">
                       <lable>Status</lable>
                     <select name="status" class="form-control">
                         <option value="1">Show</option>
                         <option value="0">Hide</option>
                     </select>
                   </div>
                    <div class="form-group bg-whitesmoke br ">
                       <input type="submit" name="submit" class="btn btn-primary">
                   </div>
                   
               </form>
              </div>
             
            </div>
          </div>
        </div>   
        
  <script>
    $(document).ready(function() {
      // Update status when the select value changes
      $('.statusSelect').on('change', function() {
        $('#statusUpdateForm').submit(); // Submit the form
      });
    });


    function confirmDelete(blogId) {
      if (confirm('Are you sure you want to delete this Enquiry Entry?')) {
        document.getElementById('deleteForm' + blogId).submit();
      }
    }
  </script>

</x-app-layout>