@extends('layouts.sidenav')
@section('title')
Inventory
@endsection
@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('header')
<h1 class="m-0 text-dark" style="float:left">My Products/Services</h1>
<div style="float:right">
  <a href="/add_inventory" class="btn btn-primary btn-lg"><i class="fas fa-plus mr-2"></i>Add Inventory</a>
</div>
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="card">
            <div class="card-header">
              <h2 class="card-title"><strong>{{$inventories->count()}}</strong> Products available</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                <tr>
                  <th>#ID</th>
                  <th>Items</th>
                  <th>Description</th>
                  <th>Price</th>
                  
                  <th>Category</th>
                  <th>Action</th>
                  

                </tr>
                </thead>
                <tbody>
                  @foreach($inventories as $inventory)
                <tr>
                  <td>{{$inventory->id}}</td>
                  <td>{{$inventory->item}}</td>
                  <td>{{$inventory->description}}
                  </td>
                  
                  <td><strike>N</strike> {{$inventory->price}}</td>
                  <td>{{$inventory->category}}</td>
                  <td>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item editbtn">Edit</a>
                        <a class="dropdown-item" href="{{'inventory/delete/'.$inventory->id}}" onclick="return confirm('are you sure you want to delete this inventory')">Delete</a>
                        

                    </div>
                </div>
                  </td>

                  
                </tr>
                @endforeach
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Item</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Category</th>
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
modal to edit inventory
<div class="modal" id="editInv" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Inventory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm" method="POST">
        @csrf
        
        <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="name">Item</label>
            <input type="text" class="form-control" id="item" name="item">
              
          </div>
          <div class="form-group">
            <label for="email">Description</label>
            <textarea class="form-control" name="description" id="desc"></textarea>
            
              
          </div>
          <div class="form-group">
            <label for="phone">Price</label>
            <input type="text" class="form-control" id="price" name="price">
              
          </div>
          <div class="form-group">
            <label for="add">Category</label>
            <input type="text" class="form-control" id="cat" name="cat">
              
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
<script type="text/javascript">
  $(document).ready(function(){
    $('.editbtn').click(function(){
      $('#editInv').modal('show');
  

  $tr=$(this).closest('tr');
  var data=$tr.children('td').map(function(){
    return $(this).text();
  }).get();
  console.log(data);

//getting the values of the table into the modal form
$('#id').val(data[0]);
  $('#item').val(data[1]);
  $('#desc').val(data[2]);
  $('#price').val(data[3]);
  $('#cat').val(data[4]);

  });

  $('#editForm').submit(function(e){
     var id= $('#id').val();
     e.preventDefault();

     $.ajax({
      method:'POST',
      url:'/inventory/editing/'+id,
      data:$('#editForm').serialize(),
      success:function(response){
        console.log(response);
        $('#editInv').modal('hide');
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