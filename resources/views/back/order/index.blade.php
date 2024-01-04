<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
 <div class="card-header d-flex justify-content-between align-items-center">
    <h4>All Orders</h4>
    <div class="d-flex align-items-center">
        <div class="m-2">
            <select class="form-control sm statusSelect" >
                <option selected disabled>Filter By Payment</option>
                <option value="1">Success</option>
                <option value="0">Failed</option>
            </select>
        </div>
        <div class="m-2">
            <a href="javascript:;" id="dateRangeBtn" class="btn btn-primary icon-left btn-icon">
                <i class="fas fa-calendar"></i> Choose Date
            </a>
        </div>
        <div class="m-2">
            <a href="#" class="btn btn-success">Export</a>
        </div>
    </div>
</div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped"  id="table-1" >
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                         <th>Order Id</th>
                        <th>Courses</th>
                        <th>Price</th>
                        <th>Duration</th>
                        <th>Payment Status </th>
                        <th>Date Time </th>
                       <th>Action </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $key => $list)
                      <tr>
                        <td>{{ $key+1    }} </td>
                         <td> #T00{{ $list->id }}</td>
                        <td>{{ $list->course?->name  }}</td>
                        <td>{{ $list->price ?? ''}} </td>
                        <td>{{ $list->duration ?? '' }}</td>
                        
                        <td>
                            <select name="payment" class="form-control">
                                <option @if($list->payment_status == 1) selected @endif value="1">Success</option>
                                <option @if($list->payment_status == 0) selected @endif value="0">Failed</option>
                                <option @if($list->payment_status != 0 && $list->payment_status != 1) selected @endif value="">Select Payment Status</option>
                            </select>
                        </td>
                        <td>{{ $list->created_at->format('d M y - h:i A') }}</td>
                      <td>
    <button type="button" class="btn btn-primary view" data-id="{{ $list->id ?? '' }}">View</button>
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
  
     <div class="modal fade" id="viewOrderDetails" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Order Details </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
  <script>
    // $(document).ready(function() {
    //   $('.statusSelect').on('change', function() {
    //     $('#statusUpdateForm').submit(); 
    //   });
    // });

    $(document).ready(function() {
        $('#dateRangeBtn').daterangepicker({
            opens: 'left', // Adjust as needed
            locale: {
                format: 'YYYY-MM-DD', // Adjust the date format
            }
        });
    });


$('.view').on('click', function() {
    var orderId = $(this).data('id');
    $.ajax({
        method: 'GET', 
        url: '{{ route('order.show', ['order' => ':id']) }}'.replace(':id', orderId),
        success: function(response) {
            $('#viewOrderDetails .modal-body').html(response);
            $('#viewOrderDetails').modal('show');
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
});

$(document).ready(function() {
    // Initialize the date range picker
    $('#dateRangeBtn').daterangepicker({
        opens: 'left', // Adjust as needed
        locale: {
            format: 'YYYY-MM-DD', // Adjust the date format
        }
    });

    // Handle the event when the apply button is clicked in the date range picker
    $('#dateRangeBtn').on('apply.daterangepicker', function(ev, picker) {
        // Trigger the filter when the date range is applied
        applyFilter();
    });

    // Trigger the filter when payment status is changed
    $('.statusSelect').on('change', function() {
        applyFilter();
    });

    // Function to apply the filter and update the table
    function applyFilter() {
        var startDate = $('#dateRangeBtn').data('daterangepicker').startDate.format('YYYY-MM-DD');
        var endDate = $('#dateRangeBtn').data('daterangepicker').endDate.format('YYYY-MM-DD');
        var paymentStatus = $('.statusSelect').val();

        // Make an AJAX request to update the table with the filtered data
        $.ajax({
            method: 'GET',
            url: '{{ route('order.index') }}',
            data: {
                start_date: startDate,
                end_date: endDate,
                payment_status: paymentStatus
            },
            success: function(response) {
                // Update the table with the filtered data
                $('#table-1 tbody').html(response);
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }
});



  </script>

</x-app-layout>