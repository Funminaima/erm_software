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
<h1 class="m-0 text-dark" style="float:left">Vendors</h1>
<div style="float:right">
  <a href="/add_vendor" class="btn btn-primary btn-lg"><i class="fas fa-plus mr-2"></i>Add Vendor</a>
  <p style="padding:none!important"><a href="#"  data-toggle="modal" data-target="#exampleModal">Choose existing vendor</a></p>
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
                  <th>Type</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Goods Purchased</th>
                  <th>Total Amount</th>
                  <th>Total Payment</th>
                  <th>Balance</th>
                  <th>Date</th>
                  <th>Action</th>
                  

                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>company</td>
                  <td>Salako Rahim</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td>yaba, Lagos</td>
                  <td>raw materials for soap 4</td>
                  <td><strike>N</strike> 50,000</td>
                  <td><strike>N</strike> 50,000</td>
                  <td><strike>N</strike>none </td>
                  <td>20/11/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Deposit</a>
                        
                    </div>
                </div>
                  </td>

                  
                </tr>
               <tr>
                  <td>company</td>
                  <td>Adelaja Temitop</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td>Abeaokura street Yaba</td>
                  <td>raw materials for shoe making 4</td>
                  <td><strike>N</strike> 10,000</td>
                  <td><strike>N</strike> 3,000</td>
                  <td><strike>N</strike> 7,000</td>
                  <td>20/11/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Deposit</a>
                        
                    </div>
                </div>
                  </td>

                  
                </tr>
                <tr>
                  <td>company</td>
                  <td>unilver plc</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td>Lekki, Lagos</td>
                  <td>20 packs of milo</td>
                  <td><strike>N</strike> 290,000</td>
                  <td><strike>N</strike> 50,000</td>
                  <td><strike>N</strike>none </td>
                  <td>20/11/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Deposit</a>
                        
                    </div>
                </div>
                  </td>

                  
                </tr>
                <tr>
                  <td>Individual</td>
                  <td>Salako Rahim</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td>No 11 apapa road, Lagos</td>
                  <td>raw materials for soap 4</td>
                  <td><strike>N</strike> 50,000</td>
                  <td><strike>N</strike> 50,000</td>
                  <td><strike>N</strike> -</td>
                  <td>20/11/2020</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Deposit</a>
                        
                    </div>
                </div>
                  </td>

                  
                </tr>
                <tr>
                  <td>Individual</td>
                  <td>Salako Rahim</td>
                  <td>test@gmail.com
                  </td>
                  <td>08076546756</td>
                  <td>No 11 modupe street, Ibadan</td>
                  <td>raw materials for soap 4</td>
                  <td><strike>N</strike> 50,000</td>
                  <td><strike>N</strike> 50,000</td>
                  <td>20/11/2020</td>
                  <td><strike>N</strike> -</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Deposit</a>
                        
                    </div>
                </div>
                  </td>

                  
                </tr>
             
                
                </tbody>
                <tfoot>
                <th>Type</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Goods Purchased</th>
                  <th>Total Amount</th>
                  <th>Total Payment</th>
                  <th>Balance</th>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Existing Vendor form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputphone">Choose vendor</label>
                    <select class="form-control" name="vend">
                      <option value="">choose</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="">Goods Purchases</label>
                    <textarea class="form-control" name="goods"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="price">Total Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter Total" name="price">
                  </div>
                  
                  <div class="form-group">
                    <label for="add1">Amount Paid</label>
                    <input type="text" name="paid" placeholder="Enter Amount Paid" class="form-control" id="paid">
                  </div>
                  
                    <input type="hidden" name="bal" placeholder="Enter City" class="form-control" id="bal">
                  
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Date</label>
                    <input type="date" name="date" class="form-control">
                  </div>
                 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="btn">Save</button>
                </div>
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal ends -->
 
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