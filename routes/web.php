<?php
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
Route::get('test', function(){
	return view('test');
});
Route::get('test_db','CustomerController@index');
// Route::get('customer','CustomerController@customer');
/*
join query builder
*/
/* select & join */
Route::get('customer', 'CustomerController@customer_join');
/* insert data */
Route::get('tambah_customer','CustomerController@tambah_customer');
/* update data */
Route::get('update_customer/{id}','CustomerController@update_customer');