@extends('layouts.sidenav')
@section('title')
Expenses
@endsection
@section('header')
<h1>Add Expenses</h1>
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
                  <hr>
                  <p style="color:red">*Required Fiels</p>
                  <div class="form-group">
                    <label for="exampleInputphone">Expense Type</label>
                    <select class="form-control" name="type">
                      
                <option value="Computer Hardware" selected='selected'>Computer Hardware</option>
                      <option value="Accommodation">Accommodation</option>
                    <option value="Advertising and Promotion">Advertising and Promotion</option>
                    <option value="Bank/Finance Charges">Bank/Finance Charges</option>
                    <option value="Computer Hardware">Computer Hardware</option>
                    <option value="Computer Software">Computer Software</option>
                    <option value="Insurance">Insurance</option>
                    <option value="Office Equipment">Office Equipment</option>
                    <option value="Office Rent">Office Rent</option>
                    <option value="Printing">Printing</option>
                    <option value="SMS Units">SMS Units</option>
                    <option value="Travel">Travel</option>
                    <option value="Miscellaneous">Miscellaneous</option>
                 </select>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input type="text" name="amt" placeholder="Enter Expense Amount" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Expense Date</label>
                    <input type="date" class="form-control"  name="date">
                  </div>
                  <hr>
                  <p style="color:red">*Optional Fileds</p>
                  <div class="form-group">
                    <label for="">Expense Reoccuring?</label>
                    <input type="radio" name="radio">Yes
                    <input type="radio" name="radio">No
                  </div>
                  <div class="form-group">
                    <label for="">Add Reoccuring Expense</label>
                    <select class="form-control" name="reoccur">
                      <option value="">choose</option>
                      <option value="daily">Everyday</option>
                      <option value="weekly">Every Week</option>
                      <option value="monthly">Every Month</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="price">Upload Reciept</label>
                    <input type="file" name="file">
                  </div>
                  
                  <div class="form-group">
                    <label for="add1">Description</label>
                    <textarea class="form-control"></textarea>
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
    

  });
</script>
@endsection