<?php
Route::get('/', function () {
	// echo "hello world, now : ".date('Y-m-d H:i:s');
    return view('welcome');
});
Route::get('/hello','HelloController@index')->name('hello.index');
// untuk belajar bootstrap 3
// Route::get('test',function(){
// 	return view('test');
// })->name('test');
Route::get('blank',function(){
	return view('blank');
})->name('blank');
/*
	membuat route baru dengan view baru mengimplementasikan extending layout dan components
*/
Route::get('chart',function(){
	return view('chart');
})->name('chart');
Route::get('test_db','HelloController@test_db')->name('test_db');
Route::get('customer','HelloController@customer');
Route::get('test_store', function(){
	//select data
	// $store = \App\Store::limit(10)->get();
	//die and dump
	// dd($store);
	//insert data
	$data = [
		'store_id'	=> 1,
		'first_name'=> 'Lorem',
		'last_name'	=> 'Ipsum',
		'email'		=> 'lorem@ipsum.com',
		'address_id'	=> 1,
		'active'	=> '1'
	];
	\App\Customer::create($data);
	// insert 
	$c = new \App\Customer();
	$c->store_id = '1';
	$c->first_name = 'Selamat';
	$c->last_name = 'Siang';
	$c->email = 'selamat@siang.com';
	$c->address_id = '1';
	$c->active = '1';
	$c->save();
	return "sukses";
});
//menampilkan customer
Route::get('test','TestController@index');
//create customer
Route::get('test_create','TestController@create');
//update customer
Route::get('test_update/{customer_id}','TestController@update');
//delete customer
Route::get('test_delete/{customer_id}','TestController@delete');
Route::get('join_store_to_customer','TestController@join_store_to_customer');
Route::resource('customer','CustomerController');
	
	// Route::get('customer','CustomerController@index')->name('customer.index');
	// Route::get('customer/create','CustomerController@create')->name('customer.create');
	// Route::post('customer','CustomerController@store')->name('customer.store');
	// Route::get('customer/{id}/edit','CustomerController@edit')->name('customer.edit');
	// Route::put('customer/{id}','CustomerController@update')->name('customer.update');
	
	// Route::get('customer/{id}','CustomerController@show')->name('customer.show');
	// Route::delete('customer/{id}','CustomerController@destroy')->name('customer.destroy');