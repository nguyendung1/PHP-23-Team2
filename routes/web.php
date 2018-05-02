<?php

Route::get('/', 'ProductsController@index');
Route::get('about', 'ProductsController@about');
Route::get('blog', 'ProductsController@blog');  	
Route::get('contact', 'ProductsController@contact');
  	
//show store
Route::get('store/{id}', 'ProductsController@store');

//show tim du lieu
Route::get('search', 'ProductsController@search');

//tim tren gia tien
Route::get('duoi_1_trieu', 'ProductsController@duoi_1_trieu');
Route::get('1_den_3_trieu', 'ProductsController@MotDen3Trieu');
Route::get('3_den_6_trieu', 'ProductsController@BaDen6Trieu');
Route::get('6_den_10_trieu', 'ProductsController@SauDen10Trieu');
Route::get('10_den_15_trieu', 'ProductsController@MuoiDen15Trieu');
Route::get('tren_15_trieu', 'ProductsController@Tren15Trieu');

//view detail
Route::get('view_detail/{id}', 'ProductsController@view_detail');

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

 Route::get('dang-ky','ProductsController@dangki');



