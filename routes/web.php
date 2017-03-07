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
Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
	Route::get('api', 'JobsController@index');
	Route::get('api/jobs', 'JobsController@index');
	Route::get('api/jobs/{id}/edit', 'JobsController@edit');

	Route::get('api/items', 'ItemsController@index');
	Route::get('api/products', 'ProductsController@index');
});
