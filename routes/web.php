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

Route::get('/','HomeController@index');
Route::get('category/{id}','HomeController@category')->name('front.category');


//Route::get('dashboard','BackEnd\Home@index');

Route::namespace('BackEnd')->prefix('dashboard')->group(function(){

	Route::get('/','Home@index');
	Route::resource('users','Users')->except('show');
	Route::resource('categories','Categories')->except('show');
});

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
