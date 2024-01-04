<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4>Why Choose US </h4>
                 <button class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-info"></i></button>
                <form action="{{route('whyus.create')}}" method="get">
                  <button class="btn btn-primary" type="submit">Create New </button>
                </form>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped"  id="table-1" >
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Title</th>
                        <th>Image</th>
                  
                        <th>Status</th>
                        <th>Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($whyus as $key => $list)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{!! $list->title ?? '' !!}</td>
                        <td><img src="{{asset($list->image )}}" alt="" style="max-width: 100%; max-height: 50px;"> </td>
                      

                        <td>
                          <!-- Status Update Form -->
                          <form action="{{ route('whyus.show', ['whyu' => $list->id]) }}" method="GET">
                            @csrf
                            

                            <button type="submit"class="{{ $list->status == 1 ? 'btn btn-success' : 'btn btn-danger' }}">
                                 <i class="fas {{ $list->status == 1 ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                            </button>

                          </form>
                        </td>
                        <td>{{ $list->order }}</td>
                        <td>
                          <form action="{{ route('whyus.edit', ['whyu' => $list->id]) }}" method="GET" class="d-inline">
                            @csrf
                            <button type="submit" class="edit badge badge-primary btn btn-primary"><i class="fas fa-edit" ></i></button>
                          </form>

                          <form id="deleteForm{{ $list->id }}" action="{{ route('whyus.destroy', ['whyu' => $list->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete({{ $list->id }})" class="delete badge badge-danger btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                          </form>



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
                      $name = 'whyus';
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
      if (confirm('Are you sure you want to delete this why choose us entry?')) {
        document.getElementById('deleteForm' + blogId).submit();
      }
    }
  </script>

</x-app-layout>