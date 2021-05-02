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
              <h2 class="card-title"><strong>{{$customers->count()}}</strong> customers available</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                <tr>
                  <th>#ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  
                  <th>Address</th>
                  <th>state</th>
                  <th>Action</th>
                  

                </tr>
                </thead>
                <tbody>
                  @foreach($customers as $customer)
                <tr>
                  <td>{{$customer->id}}</td>
                  <td>{{$customer->name}}</td>
                  <td>{{$customer->email}}</td>
                  <td>{{$customer->phone}}</td>
                  <td>{{$customer->address}}</td>
                  <td>{{$customer->state->name}}</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <!-- <a class="dropdown-item editbtn" href="{{'/customer/'.$customer->id.'/edit'}}">Edit</a> -->
                        <a class="dropdown-item editbtn">Edit</a>
                        <a class="dropdown-item" href="{{'/customer/delete/'.$customer->id}}" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</a>
                        
                    </div>
                </div>
                  </td>

                  
                </tr>
                @endforeach
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>#ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>state</th>
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

<!-- modal to edit -->
<div class="modal" id="editCustomer" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit customer information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm" method='POST'>
        @csrf
         
        <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
              
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
              
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
              
          </div>
          <div class="form-group">
            <label for="add">Address</label>
            <input type="text" class="form-control" id="add" name="address">
              
          </div>
          
          <div class="form-group">
            <label for="city">city</label>
            <input type="text" class="form-control" id="city" name="city">
              
          </div>
          
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Changes</button>
              
          </div>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal to edit -->
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
<script>
  $(document).ready(function(){
    $('.editbtn').click(function(){
        $('#editCustomer').modal('show');

         $tr=$(this).closest('tr');
         var data=$tr.children('td').map(function(){
          return $(this).text();
         }).get();

         console.log(data);

         $('#id').val(data[0]);
         $('#name').val(data[1]);
         $('#email').val(data[2]);
         $('#phone').val(data[3]);
         $('#add').val(data[4]);
         $('#city').val(data[5]);
    });

    $('#editForm').submit(function(e){
     var id= $('#id').val();
     e.preventDefault();

     $.ajax({
      method:'POST',
      url:'/customer/edit/' + id,
      data:$('#editForm').serialize(),
      success:function(response){
        console.log(response);
        $('#editCustomer').modal('hide');
        alert('data updated');
        location.reload();
      },
      error:function(error){
        console.log(error);
      }

     });
    });
  });
</script>
@endsection