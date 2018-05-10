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
	Route::group(['prefix' => 'user'], function(){
		Route::get('/add_user','UserController@getUser');
		Route::post('/add_user','UserController@postUser');
		Route::get('/list_user','UserController@listUser');
		Route::get('/delete/{id}','UserController@delete');
		Route::get('/edit_user/{id}','UserController@getEdit');
		Route::post('/edit_user/{id}','UserController@postEdit');
		
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

 Route::get('shopping',"OrderController@listOrder");

Route::get('status/{id}/{status}','OrderController@status');
Route::get('chitiet/{id}','OrderController@detailOrder');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
