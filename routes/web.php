<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//customer

Route::get('/add_customer', 'CustomerController@createCustomer');

Route::post('/add_customer', 'CustomerController@storeCustomer');

Route::get('/customer', 'CustomerController@getAllCustomers')->name('allcustomer');

//edit a customer
Route::post('/customer/edit/{id}', 'CustomerController@editCustomer');

//delete a customer
Route::get('/customer/delete/{id}','CustomerController@deleteCustomer');


//inventory


Route::get('/add_inventory', 'InventoryController@addInventory');

Route::post('/add_inventory', 'InventoryController@insertInventory');

Route::get('/inventory', 'InventoryController@getAllInventory');

// Route::post('/inventory/edit/{id}','InventoryController@editInventory');
Route::post('/inventory/editing/{id}', 'InventoryController@editInventory');
Route::get('/inventory/delete/{id}','InventoryController@deleteInv');

//sales
Route::get('/add_sale', function(){
	return view('sales.add_sale');
});
Route::get('/all_sale', function(){
	return view('sales.sale');
});

//vendors
Route::get('/add_vendor', function(){
	return view('expenses.addvendor');
});
Route::get('/all_vendor', function(){
	return view('expenses.vendor');
});
//expenses
Route::get('/add_expense', function(){
	return view('expenses.addexpense');
});