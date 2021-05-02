<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use validator;


class InventoryController extends Controller
{
	public function addInventory(){
		return view('inventory.add_goods');
	}
    

    public function insertInventory(Request $request){
    	//validating the data
    	$validated= $request->validate([
    		'item'=> 'required|string',
    		'description'=>'nullable',
    		'price'=>'required|numeric',
    		'category'=>'required'
    	]);
    	$inv=Inventory::create($request->all());
    	if($inv){
    		return redirect()->back()->with(['success'=>'An Inventory has been succesfully added']);
    	}else{
    		return redirect()->back()->with(['error'=>'An error occured']);
    	}
    }

    public function getAllInventory(){
    	$all_inv=Inventory::all();

    	return view('inventory.inventory',['inventories'=>$all_inv]);
    }


    // public function inventoryEdit(Request $request, $id){
    // 	$editInv=Inventory::find($id);

    // 	$editInv->item=$request->input('item');
    // 	$editInv->description=$request->input('description');
    // 	$editInv->price=$request->input('price');
    // 	$editInv->category=$request->input('cat');
    // 	$editInv->save();
    // }
    function editInventory(Request $request, $id){
    	$edit=Inventory::find($id);
    	$edit->item=$request->input('item');
        $edit->description=$request->input('description');

        $edit->price=$request->input('price');

        $edit->category=$request->input('category');

        
        $edit->save();

    }

    function deleteInv($id){
    	$deteleteInv=Inventory::find($id);
    	$deteleteInv->delete();
    	
    		return redirect()->back()->with(['success'=>'succesfully deleted']);
    	
    }




}
