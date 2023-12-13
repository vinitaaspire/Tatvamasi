<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4>Blog</h4>
                <form action="{{route('blog.create')}}" method="get">
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
                        <th>Name </th>
                        <th>Image</th>
                        <th>Short Desc</th>
                        <th>Status</th>
                        <th>Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($blogs as $key => $blog)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $blog->name }}</td>
                        <td><img src="{{asset($blog->image )}}" alt="" style="max-width: 100%; max-height: 50px;"> </td>
                        <td>{{ $blog->shortdesc }}</td>

                        <td>
                          <!-- Status Update Form -->
                          <form action="{{ route('blog.show', ['blog' => $blog->id]) }}" method="GET">
                            @csrf
                            

                            <button type="submit" class="{{ $blog->status == 1 ? 'btn btn-success' : 'btn btn-danger' }}">
                              {{ $blog->status == 1 ? 'Active' : 'Inactive' }}
                            </button>

                          </form>
                        </td>
                        <td>{{ $blog->order }}</td>
                        <td>
                          <form action="{{ route('blog.edit', ['blog' => $blog->id]) }}" method="GET" class="d-inline">
                            @csrf
                            <button type="submit" class="edit badge badge-primary btn btn-primary">Edit</button>
                          </form>

                          <form id="deleteForm{{ $blog->id }}" action="{{ route('blog.destroy', ['blog' => $blog->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete({{ $blog->id }})" class="delete badge badge-danger btn btn-danger">Delete</button>
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
      if (confirm('Are you sure you want to delete this blog entry?')) {
        document.getElementById('deleteForm' + blogId).submit();
      }
    }
  </script>

</x-app-layout>