@extends('layouts.sidenav')
@section('title')
Vendor
@endsection
@section('header')
<h1>Add Vendor Information</h1>
@endsection
@section('content')
<div class="container-fluid">
        <div class="row d-flex justify-content-center align-item-center">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card ">
              
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputphone">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Vendor name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" placeholder="Enter Vendor Email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Vendor Phone" name="phone">
                  </div>
                  <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Vendor Address" name="add">
                  </div>
                  <div class="form-group">
                    <label for="">Goods Purchases</label>
                    <textarea class="form-control" name></textarea>
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
                  <div class="form-group">
                    <label>Vendor category</label>
                    <select class="form-control">
                      <option value="">choose</option>
                      <option value="person">Individual</option>
                      <option value="company">Company</option>
                    </select>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="btn">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            
              
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('form').submit(function(){
      var good_price=Number($('#price').val());
      var paid=Number($('#paid').val());
      var bal=Number(good_price)-Number(paid);
      $("#bal").val(bal);

    });

  });
</script>
@endsection