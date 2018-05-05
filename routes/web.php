<?php

Route::get('/', 'ProductsController@index');
Route::get('about', 'ProductsController@about');
Route::get('blog', 'ProductsController@blog');  	
Route::get('contact', 'ProductsController@contact');
//show store
Route::get('store/{id}', 'ProductsController@store');

//show tim du lieu
Route::get('search', 'ProductsController@searchProduct');

//tim tren gia tien
Route::get('searchFollowPrice/{price1}/{price2}', 'ProductsController@searchFollowPrice');
//view detail
Route::get('viewDetail/{id}', 'ProductsController@viewDetail');

//Search Admin
Route::group(['prefix' => 'admin'], function()
{
	Route::group(['prefix' => 'order'], function(){
		Route::get('/order_list', 'ProductsController@list');
		Route::get('/pending_order', 'ProductsController@pending_order');
		Route::post('/search', 'ProductsController@search_admin');
		Route::get('/delete/{id}', 'ProductsController@delete');
	});	
	
	Route::get('/home', function()
	{
		return view('layouts.masterAdmin');
	});
});

 Route::get('dangky','UserController@getRegister');
 Route::post('dangky','UserController@postRegister');

 Route::get('dangnhap','UserController@getLogin')->name('login');
 Route::post('dangnhap','UserController@postLogin');

 Route::get('dangxuat','UserController@logout');

 Route::get('update/{$id}','UserController@getUpdate')->middleware('auth');
 Route::post('update/','UserController@Update');


 Route::get('admin/changePass','UserController@getChangePass');
 Route::post('admin/changePass','UserController@ChangePass');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
