<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4>Category</h4>
                <form action="{{route('category.create')}}" method="get">
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
                        <th>Name</th>
                     
                        <th>Status</th>
                        <th>Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($category as $key => $list)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{!! $list->name ?? '' !!}</td>
                       
                        <td>
                       
                          <form action="{{ route('category.show', ['category' => $list->id]) }}" method="GET">
                            @csrf
                            <button type="submit"class="{{ $list->status == 1 ? 'btn btn-success' : 'btn btn-danger' }}">
                            <i class="fas {{ $list->status == 1 ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                            </button>

                          </form>
                        </td>
            

                        <td>{{ $list->order }}</td>
                        <td>
                          <form action="{{ route('category.edit', ['category' => $list->id]) }}" method="GET" class="d-inline">
                            @csrf
                            <button type="submit" class="edit badge badge-primary btn btn-primary"><i class="fas fa-edit" ></i></button>
                          </form>

                          <form id="deleteForm{{ $list->id }}" action="{{ route('category.destroy', ['category' => $list->id]) }}" method="POST" class="d-inline">
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
  <script>
    $(document).ready(function() {
      // Update status when the select value changes
      $('.statusSelect').on('change', function() {
        $('#statusUpdateForm').submit(); // Submit the form
      });
    });


    function confirmDelete(blogId) {
      if (confirm('Are you sure you want to delete this category entry?')) {
        document.getElementById('deleteForm' + blogId).submit();
      }
    }
  </script>

</x-app-layout>