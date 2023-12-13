<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4>Contact Us </h4>
               
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
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                     
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($contactUs as $key => $list)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $list->name ?? ''}}</td>
                        <td>{{ $list->mobile ?? ''}} </td>
                        <td>{{ $list->email ?? '' }}</td>
                        <td>{{ $list->address ?? '' }}</td>
                     
                        <td>

                          <form id="deleteForm{{ $list->id }}" action="{{ route('contactUs.destroy', ['contactU' => $list->id]) }}" method="POST" class="d-inline">
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
      if (confirm('Are you sure you want to delete this Contact entry?')) {
        document.getElementById('deleteForm' + blogId).submit();
      }
    }
  </script>

</x-app-layout>