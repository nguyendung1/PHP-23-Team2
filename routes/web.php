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


//show product home page

 Route::get('/','ProductsController@index');

 //show store

 Route::get('store/{id}','ProductsController@store');


 Route::group(['prefix'=>'admin'], function()
 {
	 Route::group(['prefix'=>'order'], function(){
			Route::get('/order_list', 'ProductsController@list');
			Route::get('/pending_order', 'ProductsController@pending_order');
			Route::post('/search', 'ProductsController@search');
			Route::get('/delete/{id}', 'ProductsController@delete');
	});	
	Route::get('/home', function()
	{
			return view('layouts.masterAdmin');
	});
});




