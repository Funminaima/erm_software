<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use App\Http\Requests;
use App\Http\Requests\StoreCustomerRequest;
use App\State;
use App\Customer;

class CustomerController extends Controller
{
	function createCustomer(Request $request){
		$states=State::all();
		return view('customer.addcus',['states'=>$states]);
	}

    function storeCustomer(Requests\StoreCustomerRequest $request){
    	
    	// Retrieve the validated input data...
    	//$validated = $request->validated();

    	

    	$customer=Customer::create($request->all());
    	if($customer){
    		return redirect()->back()->with(['success'=>'Successfully created']);
    	}
    	return redirect()->back()->with(['error'=>'An error occured ']);
    	

    }


    function getAllCustomers(){
    	$get_customer=Customer::all();

    	// $count=Customer::count();
    	return view('customer.customer',['customers'=>$get_customer]);
    }

    function editCustomer(Request $request, $id){
    	$edit=Customer::find($id);
    	$edit->name=$request->input('name');
        $edit->email=$request->input('email');

        $edit->phone=$request->input('phone');

        $edit->address=$request->input('address');

        $edit->city=$request->input('city');
        $edit->save();

    }

    // function saveEdit($id){
    // 	$edit=Customer::find($id);
    // 	$edit->update();
    // 	return redirect()->route('allcustomer')->with(['success'=>'updated succesfully']);

    // }

    function deleteCustomer($id){
        $delete=Customer::find($id);
        $delete->delete();

        return redirect()->route('allcustomer')->with(['success'=>'Customer Succesfully deleted']);
    }










}
