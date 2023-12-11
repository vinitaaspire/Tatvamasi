<x-app-layout>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4>Banners</h4>
                <button class="btn btn-primary">Create New </button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Banner </th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
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
      getAll();
    });


    function getAll() {
      let url = '{{route("banner.index")}}';
      $.ajax({
        method: 'get',
        url: url,
        success: function(response) {
          if (response.status == 200) {
            $('#table').DataTable().destroy();
            $('#table').DataTable({
              data: response.data,
              columns: [{
                  data: null,
                  render: function(data, type, row, meta) {
                    return meta.row + 1;
                  }
                },
                {
                  data: 'image'
                },
                {
                  data: 'title',
                  render: function(data, type, row) {
                    return data;
                  }
                },
                {
                  data: 'status'
                },
                {
                  data: 'option'
                }
              ]
            });
          } else {
            alert('somting went wrong');
          }

        }
      })
    }

    $(document).on('click', '.delete', function(){
    let id = $(this).data('banner');
    
    // Confirm before making the AJAX request
    if (confirm('Are you sure you want to delete banner with ID ' + id + '?')) {
        $.ajax({
            method: 'DELETE',
            url: '{{ route("banner.destroy", ["banner" => "__bannerid__"]) }}'.replace('__bannerid__', id),
            success: function(response) {
              if(response.status == 200 ){
                getAll();
               console.log(response.message )
              }
              console.log(response.message )
            },
            error: function(error) {
                console.error(error);
            }
        });
    }
});


$(document).on('click', '.Status', function(){
    let id = $(this).data('banner');
        $.ajax({
            method: 'GET',
            url: '{{ route("banner.show", ["banner" => "__bannerid__"]) }}'.replace('__bannerid__', id),
            success: function(response) {
              if(response.status == 200 ){
                getAll();
               console.log(response.message )
              }
              console.log(response.message )
            },
            error: function(error) {
                console.error(error);
            }
        });
  
});


$(document).on('click', '.edit', function(){
    let id = $(this).data('banner');
        $.ajax({
            method: 'GET',
            url: '{{ route("banner.show", ["banner" => "__bannerid__"]) }}'.replace('__bannerid__', id),
            success: function(response) {
              if(response.status == 200 ){
                getAll();
               console.log(response.message )
              }
              console.log(response.message )
            },
            error: function(error) {
                console.error(error);
            }
        });
  
});






  </script>
</x-app-layout>