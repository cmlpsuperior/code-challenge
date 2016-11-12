<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'LinkController@index' )->name('link.index');

Route::get('link', 'LinkController@index' )->name('link.index');
Route::post('link', 'LinkController@store' )->name('link.store');
Route::get('link/create', 'LinkController@create' )->name('link.create');
Route::get('link/{id}', 'LinkController@show' )->name('link.show');

Route::get('shortLink/{id}', 'LinkController@shortLink' )->name('link.shortLink');
