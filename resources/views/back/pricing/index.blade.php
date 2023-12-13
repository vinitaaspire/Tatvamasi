<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4>Pricing</h4>
                <form action="{{route('pricing.create')}}" method="get">
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
                        <th>Month</th>
                        <th>Gross Price</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($price as $key => $list)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{!! $list->month ?? '' !!}</td>
                        <td>{{ $list->gross_price ?? ''}} </td>
                        <td>{{ $list->price }}</td>

                        <td>
                          <!-- Status Update Form -->
                          <form action="{{ route('pricing.show', ['pricing' => $list->id]) }}" method="GET">
                            @csrf
                            

                            <button type="submit" class="{{ $list->status == 1 ? 'btn btn-success' : 'btn btn-danger' }}">
                              {{ $list->status == 1 ? 'Active' : 'Inactive' }}
                            </button>

                          </form>
                        </td>
                        <td>{{ $list->order }}</td>
                        <td>
                          <form action="{{ route('pricing.edit', ['pricing' => $list->id]) }}" method="GET" class="d-inline">
                            @csrf
                            <button type="submit" class="edit badge badge-primary btn btn-primary">Edit</button>
                          </form>

                          <form id="deleteForm{{ $list->id }}" action="{{ route('pricing.destroy', ['pricing' => $list->id]) }}" method="POST" class="d-inline">
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
      if (confirm('Are you sure you want to delete this trainer entry?')) {
        document.getElementById('deleteForm' + blogId).submit();
      }
    }
  </script>

</x-app-layout>