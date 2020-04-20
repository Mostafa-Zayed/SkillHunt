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


//Route::get('dashboard','BackEnd\Home@index');

Route::namespace('BackEnd')->prefix('dashboard')->group(function(){

	Route::get('/','Home@index');
	//Route::get('/users','Users@index');
	//Route::get('users/create','Users@create');
	//Route::post('users','Users@store');
	//Route::get('users/{id}','Users@edit');
	//Route::post('users/{id}','Users@update');
	//Route::post('users/delete/{id}','Users@destroy');
	Route::resource('users','Users')->except('show');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
