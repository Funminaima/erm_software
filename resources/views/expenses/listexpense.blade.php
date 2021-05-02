@extends('layouts.sidenav')
@section('title')
Customer
@endsection
@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('header')
<h1 class="m-0 text-dark" style="float:left">Customer</h1>
<div style="float:right">
  <a href="/add_customer" class="btn btn-primary btn-lg"><i class="fas fa-plus mr-2"></i>Add Customer</a>
</div>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="card">
            <div class="card-header bg-secondary py-3">
              <h2 class="card-title"><strong>10</strong> customers available</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  
                  <th>Outstanding</th>
                  <th>Action</th>
                  

                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Naheemah Adeleke</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td><strike>N</strike> -20,000</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        
                    </div>
                </div>
                  </td>

                  
                </tr>
                <tr>
                  <td>Naheemah Adeleke</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td><strike>N</strike> -20,000</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        
                    </div>
                </div>
                  </td>

                  
                </tr>
                <tr>
                  <td>Naheemah Adeleke</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td><strike>N</strike> -20,000</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                      

                    </div>
                </div>
                  </td>

                  
                </tr>
                <tr>
                  <td>Naheemah Adeleke</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td><strike>N</strike> -20,000</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        
                    </div>
                </div>
                  </td>

                  
                </tr>
                <tr>
                  <td>Naheemah Adeleke</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td><strike>N</strike> -20,000</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        

                    </div>
                </div>
                  </td>

                  
                </tr>
                <tr>
                  <td>Naheemah Adeleke</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td><strike>N</strike> -20,000</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        

                    </div>
                </div>
                  </td>

                  
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Outstanding</th>
                  <th>Action</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
		</div>
	</div>
</div>
@endsection
@section('script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    
  });
</script>
@endsection