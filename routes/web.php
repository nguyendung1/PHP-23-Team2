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

 Route::get('about',function()
 {
      return view('PageStore.about');
 });
 Route::get('blog',function()
 {
      return view('PageStore.blog');
 });
 Route::get('contact',function()
 {
      return view('PageStore.contact');
 });
 //show store

 Route::get('store/{id}','ProductsController@store');

//show tim du lieu
 Route::get('search','ProductsController@search');
 
 //tim tren gia tien

 Route::get('duoi_1_trieu','ProductsController@duoi_1_trieu');
 Route::get('1_den_3_trieu','ProductsController@MotDen3Trieu');
 Route::get('3_den_6_trieu','ProductsController@BaDen6Trieu');
 Route::get('6_den_10_trieu','ProductsController@SauDen10Trieu');
 Route::get('10_den_15_trieu','ProductsController@MuoiDen15Trieu');
 Route::get('tren_15_trieu','ProductsController@Tren15Trieu');
 
 //view detail

 Route::get('view_detail/{id}','ProductsController@view_detail');

 Route::get('register','UserController@getRegister');
 Route::post('register','UserController@postRegister');

 Route::get('login','UserController@getLogin');
 Route::post('login','UserController@postLogin');
 Route::get('logout','UserController@logout');


