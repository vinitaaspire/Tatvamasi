<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4>Orders </h4>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Courses</th>
                        <th>Price</th>
                        <th>Duration</th>
                        <th>Payment Status </th>
                        <th>Date Time </th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $key => $list)
                      <tr>
                        <td>{{ $key+1    }} </td>
                        <td>{{ $list->course?->name  }}</td>
                        <td>{{ $list->price ?? ''}} </td>
                        <td>{{ $list->duration ?? '' }}</td>
                        
                        <td>
                            <button class="btn {{$list->payment_status == 1 ? 'btn-success' : 'btn-danger'}}">
                                {{$list->payment_status == 1 ? 'Success' : 'Failed'}}
                            </button>
                        </td>

                        <td>{{ $list->order_date }}</td>
                       
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
      $('.statusSelect').on('change', function() {
        $('#statusUpdateForm').submit(); 
      });
    });


  </script>

</x-app-layout>