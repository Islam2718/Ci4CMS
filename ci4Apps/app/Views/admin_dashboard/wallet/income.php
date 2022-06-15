<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Wallet Incomes</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <button data-toggle="modal" data-target="#addModal" class="btn btn-primary btn-block shadow">Add New Item</button> &nbsp; 
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>         
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Incomes</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->

<table class="table table-bordered text-center" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Icon</th>
      <th scope="col">Link</th>
      <th scope="col">Status</th>
      <th scope="col" style="width:25%;">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>//</td>
      <td>//</td>
      <td>n/a</td>
      <td> 
          btn..
      </td>
      <td>btn</td>
    </tr>

  </tbody>
</table>

<!-------------->
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid--> 


<!-- Logout Modal-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('Social-media-settings'); ?>" method="POST">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title !">
                </div>
                <div class="form-group">
                    <label for="ux_type">Type</label>
                    <input name="ux_type" type="text" class="form-control" id="ux_type" placeholder="Enter Type!">
                </div>
                <div class="form-group">
                    <label for="ux_html">UX Html</label>
                    <input name="ux_html" type="text" class="form-control" id="ux_html" placeholder="Enter ux_html !">
                </div>
                <div class="form-group">
                    <label for="link_url">Link Url</label>
                    <input name="link_url" type="text" class="form-control" id="link_url" placeholder="Enter Url">
                </div>              
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>
        </form>
    </div>
</div>    