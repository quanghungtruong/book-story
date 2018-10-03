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
// Amin

Route::group(['prefix'=>'admin'], function(){
	Route::get('login', 'Auth\LoginController@showLogin');
	Route::post('login', ['as'=>'doLogin', 'use'=>'Auth\LoginController@doLogin']);
	Route::get('/', function(){
		return view('admin.home');
	});
	Route::group(['prefix'=>'category'], function(){
		Route::get('/', function(){
			return view('admin.category.list');
		});
		Route::get('list', ['as'=>'list', function(){
			return view('admin.category.list');
		}]);
		Route::get('add',['as'=>'admin.category.getCate','uses'=>'admin\CategoryController@getCate']);
		Route::post('add',['as'=>'postCate','uses'=>'admin\CategoryController@postCate']);
	});
});
// Site
Route::get('/', function () {
    return view('home');
});
