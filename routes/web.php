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

Route::group(['prefix'=>'admin'], function(){
	Route::get('/', function(){
		return view('admin.home');
	});
	Route::get('/booklist', function(){
		return view('admin.book.booklist');
	});
	Route::get('/bookaddnew', function(){
		return view('admin.book.bookaddnew');
	});
});
Route::get('/', function () {
    return view('home');
});
