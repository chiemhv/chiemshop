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

Auth::routes();

Route::get('/home', 'HomeController@index');
//////////PHAN QUAN TRI ADMIIN ////////////isroleadmin
Route::group(['prefix'=>'admin','middleware'=>'isroleadmin' ], function(){
	Route::get('/', function(){
		return view('admin.admin');
	});
	//==================== QUẢN LÝ NGƯỜI DÙNG ===================================
	Route::group(['prefix'=>'man'], function(){
		Route::get('', 'ManCtrl@index')->name('admin.man');
		Route::get('create', 'ManCtrl@create');
		Route::post('store', 'ManCtrl@store');
		Route::get('edit/{id}', 'ManCtrl@edit');
		Route::post('update', 'ManCtrl@update');
		Route::get('destroy/{id}', 'ManCtrl@destroy');
	});
	//==================== HẾT PHẦN QUẢN LÝ NGƯỜI DÙNG ==========================
	//==================== KHO HÀNG ==========================
	//-- TẠO FX -- TẦNG BÁN HÀNG, NHÓM BÁN HÀNG  


	//--- Tâng

});
