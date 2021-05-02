@extends('layouts.sidenav')
@section('title')
Sales
@endsection
@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"> -->
  
@endsection
@section('header')
<h1 class="m-0 text-dark" style="float:left">All Sales</h1>
<div style="float:right">
  <a href="/add_sale" class="btn btn-primary btn-lg"><i class="fas fa-plus mr-2"></i>Add sale</a>
</div>
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="card">
            <div class="card-header bg-secondary py-3">
              <h2 class="card-title"><strong>100</strong> Products available</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                <tr>
                  <th>Customer</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  
                  <th>Amount</th>
                  <th>Paid</th>
                  <th>Balance</th>
                  <th>Sale note</th>
                  <th>Date</th>
                  <th>Action</th>
                  

                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Abdullai Jamiu</td>
                  <td>Unripe plantains
                  </td>
                  <td>1</td>
                  <td><strike>N</strike> 5,000</td>
                  <td><strike>N</strike>2500</td>
                  <td><strike>N</strike>2500</td>
                  <td>The customer wants the plantain unripe</td>
                  <td>02/04/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Send invoice</a>

                    </div>
                </div>
                  </td>
                  
                </tr>
                <tr>
                  <td>Abdullai Jamiu</td>
                  <td>Unripe plantains
                  </td>
                  <td>1</td>
                  <td><strike>N</strike> 5,000</td>
                  <td><strike>N</strike>2500</td>
                  <td><strike>N</strike>2500</td>
                  <td>The customer wants the plantain unripe</td>
                  <td>02/04/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Send invoice</a>

                    </div>
                </div>
                  </td>
                  
                </tr>
                <tr>
                  <td>Abdullai Jamiu</td>
                  <td>Unripe plantains
                  </td>
                  <td>1</td>
                  <td><strike>N</strike> 5,000</td>
                  <td><strike>N</strike>2500</td>
                  <td><strike>N</strike>2500</td>
                  <td>The customer wants the plantain unripe</td>
                  <td>02/04/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Send invoice</a>

                    </div>
                </div>
                  </td>
                  
                </tr>
                <tr>
                  <td>Abdullai Jamiu</td>
                  <td>Unripe plantains
                  </td>
                  <td>1</td>
                  <td><strike>N</strike> 5,000</td>
                  <td><strike>N</strike>2500</td>
                  <td><strike>N</strike>2500</td>
                  <td>The customer wants the plantain unripe</td>
                  <td>02/04/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Send invoice</a>

                    </div>
                </div>
                  </td>
                  
                </tr>
                <tr>
                  <td>Abdullai Jamiu</td>
                  <td>Unripe plantains
                  </td>
                  <td>1</td>
                  <td><strike>N</strike> 5,000</td>
                  <td><strike>N</strike>2500</td>
                  <td><strike>N</strike>2500</td>
                  <td>The customer wants the plantain unripe</td>
                  <td>02/04/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Send invoice</a>

                    </div>
                </div>
                  </td>
                  
                </tr>
                <tr>
                  <td>Abdullai Jamiu</td>
                  <td>Unripe plantains
                  </td>
                  <td>1</td>
                  <td><strike>N</strike> 5,000</td>
                  <td><strike>N</strike>2500</td>
                  <td><strike>N</strike>2500</td>
                  <td>The customer wants the plantain unripe</td>
                  <td>02/04/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Send invoice</a>

                    </div>
                </div>
                  </td>
                  
                </tr>
                <tr>
                  <td>Abdullai Jamiu</td>
                  <td>Unripe plantains
                  </td>
                  <td>1</td>
                  <td><strike>N</strike> 5,000</td>
                  <td><strike>N</strike>2500</td>
                  <td><strike>N</strike>2500</td>
                  <td>The customer wants the plantain unripe</td>
                  <td>02/04/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Send invoice</a>

                    </div>
                </div>
                  </td>
                  
                </tr>
                

                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Customer</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  
                  <th>Amount</th>
                  <th>Paid</th>
                  <th>Balance</th>
                  <th>Sale note</th>
                  <th>Date</th>
                  <th>Action</th>
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
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script> -->
<!-- page script -->
<script>
//   $(document).ready(function() {
//     $('#example1').DataTable();
// } );
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection