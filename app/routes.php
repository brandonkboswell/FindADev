<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'UsersController@index');
Route::controller('/home','HomeController');
Route::resource('/users','UsersController');

Route::get('/search', 'UsersController@search');
Route::get('/api/v1/users/search', 'UsersAPIController@search');