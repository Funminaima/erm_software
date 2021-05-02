@extends('layouts.sidenav')
@section('title')
Add Sale
@endsection
@section('header')
<h1>Add Sale Record</h1>
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
                    <label for="exampleInputname">Customer</label>
                    <select class="form-control" name="customer">
                      <option value="">choose</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputphone">Inventory</label>
                    <select class="form-control" name="inventory">
                      <option value="">choose</option>
                    </select>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Cost of Product/Services</label>
                    <input type="text" name="cost">
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter quantity" name="quantity">
                  </div>
                  
                  <hr>
                  <p>Balances</p>
                  <div class="form-group">
                    <label for="add1">Amount Paid</label>
                    <input type="text" name="paid" placeholder="Enter Amount Paid" class="form-control">
                  </div>
                  <!-- <div class="form-group">
                    <label for="add1">Balance</label>
                    <input type="text" name="bal" placeholder="Enter City" class="form-control">
                  </div> -->
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Date</label>
                    <input type="date" name="date" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="add1">Sale note <span style="color:red">*optional</span></label>
                    <textarea class="form-control"></textarea>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
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