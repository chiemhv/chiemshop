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
Route::get('test', 'Test@index');
//////////PHAN QUAN TRI ADMIIN ////////////isroleadmin
Route::group(['prefix'=>'admin','middleware'=>'isroleadmin' ], function(){
	Route::get('/', function(){
		return view('admin.admin');
	});
	//==================== QUẢN LÝ NGƯỜI DÙNG ===================================
	Route::group(['prefix'=>'man'], function(){
		Route::get('', 'ManCtrl@index')->name('admin.man');
		Route::post('', 'ManCtrl@findQuery');
		Route::get('create', 'ManCtrl@create');
		Route::post('store', 'ManCtrl@store');
		Route::get('edit/{id}', 'ManCtrl@edit');
		Route::post('update/{id}', 'ManCtrl@update');
		Route::get('destroy/{id}', 'ManCtrl@destroy');
	});
	//==================== FX ==========================
	Route::group(['prefix'=>'fx'], function(){
		Route::get('', 'FxCtrl@index')->name('admin.fx');
		Route::post('', 'FxCtrl@findQuery');
		Route::get('create', 'FxCtrl@create');
		Route::post('store', 'FxCtrl@store');
		Route::get('edit/{idFx}', 'FxCtrl@edit');
		Route::post('update/{id}', 'FxCtrl@update');
		Route::get('destroy/{id}', 'FxCtrl@destroy');
	});
	//==================== CATALOG	 ==========================
	Route::group(['prefix'=>'catalog'], function(){
		Route::get('', 'CatalogCtrl@index')->name('admin.catalog');
		Route::post('', 'CatalogCtrl@findQuery');
		Route::get('create', 'CatalogCtrl@create');
		Route::post('store', 'CatalogCtrl@store');
		Route::get('edit/{id}', 'CatalogCtrl@edit');
		Route::post('update/{id}', 'CatalogCtrl@update');
		Route::get('destroy/{id}', 'CatalogCtrl@destroy');
	});
	//====================producer ==========================
	Route::group(['prefix'=>'producer'], function(){
		Route::get('', 'ProducerCtrl@index')->name('admin.producer');
		Route::post('', 'ProducerCtrl@findQuery');
		Route::get('create', 'ProducerCtrl@create');
		Route::post('store', 'ProducerCtrl@store');
		Route::get('edit/{id}', 'ProducerCtrl@edit');
		Route::post('update/{id}', 'ProducerCtrl@update');
		Route::get('destroy/{id}', 'ProducerCtrl@destroy');
	});
//====================sản phẩm ==========================
	Route::group(['prefix'=>'product'], function(){
		Route::get('', 'ProductCtrl@index')->name('admin.product');
		Route::post('', 'ProductCtrl@findQuery');
		Route::get('create', 'ProductCtrl@create');
		Route::post('store', 'ProductCtrl@store');
		Route::get('edit/{id}', 'ProductCtrl@edit');
		Route::post('update/{id}', 'ProductCtrl@update');
		Route::get('destroy/{id}', 'ProductCtrl@destroy');
		Route::get('sale', 'ProductCtrl@sale');
		});
//====================sản phẩm ==========================
	Route::group(['prefix'=>'picture'], function(){
		Route::get('', 'PictureCtrl@index')->name('admin.picture');
		Route::post('', 'PictureCtrl@findQuery');
		Route::get('create', 'PictureCtrl@create');
		Route::post('store', 'PictureCtrl@store');
		Route::get('edit/{id}', 'PictureCtrl@edit');
		Route::post('update/{id}', 'PictureCtrl@update');
		Route::get('destroy/{id}', 'PictureCtrl@destroy');
		});
});
