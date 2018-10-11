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
	Route::get('/', function(){
		return view('admin.home');
	});
	Route::post('login', ['as'=>'doLogin', 'use'=>'Auth\LoginController@doLogin']);
	Route::get('login', 'Auth\LoginController@showLogin');
	Route::group(['prefix'=>'category'], function(){
		Route::get('/', 'admin\CategoryController@listCate');
		Route::get('list', ['as'=>'list', 'uses'=>'admin\CategoryController@listCate']);
		Route::get('add', ['as'=>'getCate','uses'=>'admin\CategoryController@getCate']);
		Route::post('add', ['as'=>'postCate','uses'=>'admin\CategoryController@postCate']);
		Route::get('/edit/{id}', 'admin\CategoryController@showEditCate')->where('id', '[0-9]+');
		//Route::post('edit', ['as'=>'postEditCate','uses'=>'admin\CategoryController@postEditCate']);
		Route::get('/del/{id}', 'admin\CategoryController@delCate')->where('id', '[0-9]+');
	});
	Route::group(['prefix'=>'book'], function(){
		Route::get('/', 'admin\BookController@getBookList');
		Route::get('/list', 'admin\BookController@getBookList');
	});
});
// Site
Route::get('/', function () {
    return view('home');
});
