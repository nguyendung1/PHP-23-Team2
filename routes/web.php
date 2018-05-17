<?php
use App\Product;
use App\Category;
use App\Order;
use App\OrderDetail;
use App\User;
use App\Technology;
use Illuminate\Support\Facades\Input;

Route::get('/', 'ProductsController@index');
Route::get('about', 'ProductsController@about');
Route::get('blog', 'ProductsController@blog');  	
Route::get('contact', 'ProductsController@contact');
//show store
Route::get('store/{id}', 'ProductsController@store');

//show tim du lieu
Route::get('search', 'ProductsController@searchProduct');

//tim tren gia tien
Route::get('searchFollowPrice', 'ProductsController@searchFollowPrice');
//view detail
Route::get('viewDetail/{id}', 'ProductsController@viewDetail');

//Site Admin
Route::group(['prefix' => 'admin'], function()
{
	Route::group(['prefix' => 'order'], function(){
		Route::get('/order_list', 'ProductsController@listOrder');
		Route::post('/search', 'ProductsController@searchAdmin');
		Route::get('/order_list/{id}', 'ProductsController@detailOrder');
	});	
	Route::group(['prefix' => 'product'], function(){
		Route::get('product_list', 'ProductsController@listProduct');
		Route::get('product_update/{id}', 'ProductsController@updateProduct');
		Route::post('product_update/{id}', 'ProductsController@saveUpdateProduct');
		Route::get('product_add', 'ProductsController@addProduct');
		Route::post('product_add', 'ProductsController@saveAddProduct');
		Route::post('/search_product', 'ProductsController@searchProductAdmin');
		Route::get('/delete/{id}', 'ProductsController@deleteProduct');
	});



	Route::group(['prefix' => 'user'], function(){
		Route::get('/add_user','UserController@getUser');
		Route::post('/add_user','UserController@postUser');
		Route::get('/list_user','UserController@listUser');
		Route::get('/delete/{id}','UserController@delete');
		Route::get('/edit_user/{id}','UserController@getEdit');
		Route::post('/edit_user/{id}','UserController@postEdit');
		Route::get('/order_user/{id}','UserController@orderUser');
		
	});
	Route::get('/home', function()
	{
		return view('layouts.masterAdmin');
    });		
	Route::group(['prefix' => 'product'], function(){
		Route::get('product_list', 'ProductsController@ListProduct');
		Route::get('product_update/{id}', 'ProductsController@UpdateProduct');
		Route::post('product_update/{id}', 'ProductsController@SaveUpdateProduct');
		Route::get('product_add', 'ProductsController@AddProduct');
		Route::post('product_add', 'ProductsController@SaveAddProduct');
		Route::post('/search_product', 'ProductsController@SearchProductAdmin');
		Route::get('/delete/{id}', 'ProductsController@DeleteProduct');

	});
});

Route::get('dangky','UserController@getRegister');
Route::post('dangky','UserController@postRegister');

Route::get('dangnhap','UserController@getLogin')->name('login');
Route::post('dangnhap','UserController@postLogin');

Route::get('dangxuat','UserController@logout');

Route::get('update/{$id}','UserController@getUpdate')->middleware('auth');
Route::post('update/','UserController@Update');

Route::get('forgotPass','UserController@forgetPass');


Route::get('admin/changePass','UserController@getChangePass');
Route::post('admin/changePass','UserController@ChangePass');

Route::get('shopping',"OrderController@listOrder");


Route::get('status/{id}/{status}','OrderController@status');
Route::get('chitiet/{id}','OrderController@detailOrder');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// thiet lap route gio hang 

Route::get('addCart/{id}', 'CartController@AddCart');
Route::get('shoppingCart', 'CartController@shoppingCart');
Route::get('deleteCart/{rowId}', 'CartController@deleteCart');
Route::patch('updateCart/{rowId}', 'CartController@updateCart');
Route::post('order', 'CartController@checkOut');
Route::get('updateIncrement/{rowId}', 'CartController@updateIncrement');
Route::get('updateDecrese/{rowId}', 'CartController@updateDecrese');

//comments
Route::post('comment', 'ProductsController@comment');
