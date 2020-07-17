<?php

Route::get('index','Home@index')->name('index');
Route::resource('users','Users');
Route::resource('categories','Categories');
Route::resource('types','Types');
Route::resource('jobs','Jobs');
Route::resource('locations','Locations');
Route::resource('pages','Pages');
Route::resource('services','Services');
Route::resource('candidates','Candidates');
Route::resource('companies','Companies');
Route::resource('settings','Settings');
Route::resource('testimonials','Testimonials');
