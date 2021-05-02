@extends('layouts.sidenav')
@section('title')
Add Inventory
@endsection
@section('header')
<h1>Add Inventory</h1>
@endsection
@section('content')
<div class="container-fluid">
        <div class="row d-flex justify-content-center align-item-center">
          <!-- left column -->
          <div class="col-md-6">
            <x-alert/>
            <!-- general form elements -->
            <div class="card ">
              
              <!-- form start -->
              <form role="form" action="/add_inventory" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="item">Items</label>
                    <input type="text" class="form-control @error('item') is-invalid @enderror" id="item" placeholder="Add product or service" name="item" value="{{old('item')}}">

                    <!-- echo the error message -->
                  @error('item')
                      <span style="color:red">{{ $message }}</span>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="price">Price of Goods/Service</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Enter Price" name="price">

                    <!-- echo the error message -->
                  @error('price')
                      <span style="color:red">{{ $message }}</span>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="cat">Category</label>
                    <select name="category" class="form-control @error('category') is-invalid @enderror" id="cat">
                    	<option value=""></option>
                    	<option value="good">Good</option>
                    	<option value="service">Service</option>
                    </select>
                  @error('category')
                      <span style="color:red">{{ $message }}</span>
                  @enderror
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