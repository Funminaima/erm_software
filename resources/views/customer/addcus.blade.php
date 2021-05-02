@extends('layouts.sidenav')
@section('title')
Customer Reg
@endsection
@section('header')
<h1>Customer Registration</h1>
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
              <form action="/add_customer" method="POST">

                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputname">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputname" placeholder="Enter Fullname" name="name" value="{{old('name')}}">
                    @error('name')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>
                 

                  <div class="form-group">
                    <label for="exampleInputphone">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="exampleInputphone" placeholder="Enter Phone number" name="phone" value="{{old('phone')}}">
                  @error('phone')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{old('email')}}">
                  @error('email')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gender</label>
                    <select name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{old('gender')}}">
                    	<option value=""></option>
                    	<option value="male">Male</option>
                    	<option value="female">Female</option>
                    </select>
                  @error('gender')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>
                  
                  <hr>
                  <div class="form-group">
                    <label for="add1">Address</label>
                    <input type="text" name="address" placeholder="Enter Address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}">
                  @error('address')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label for="add1">City</label>
                    <input type="text" name="city" placeholder="Enter City" class="form-control @error('city') is-invalid @enderror" value="{{old('city')}}">
                  @error('city')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">State</label>
                    <select name="state_id" class="form-control @error('state_id') is-invalid @enderror">
                    	<option value="">choose</option>
                      @foreach($states as $state)
                      <option value="{{$state->id}}">{{$state->name}}</option>
                      @endforeach
                    </select>
                  @error('state_id')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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