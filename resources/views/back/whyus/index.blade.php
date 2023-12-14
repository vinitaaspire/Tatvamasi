<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4>Why Choose US </h4>
                <form action="{{route('whyus.create')}}" method="get">
                  <button class="btn btn-primary" type="submit">Create New </button>
                </form>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
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
                            

                            <button type="submit" class="{{ $list->status == 1 ? 'btn btn-success' : 'btn btn-danger' }}">
                              {{ $list->status == 1 ? 'Active' : 'Inactive' }}
                            </button>

                          </form>
                        </td>
                        <td>{{ $list->order }}</td>
                        <td>
                          <form action="{{ route('whyus.edit', ['whyu' => $list->id]) }}" method="GET" class="d-inline">
                            @csrf
                            <button type="submit" class="edit badge badge-primary btn btn-primary">Edit</button>
                          </form>

                          <form id="deleteForm{{ $list->id }}" action="{{ route('whyus.destroy', ['whyu' => $list->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete({{ $list->id }})" class="delete badge badge-danger btn btn-danger">Delete</button>
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