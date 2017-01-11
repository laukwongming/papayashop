<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('auth/login', 'Auth\AuthController@getLogin')->name('get-login');

Route::post('auth/login', 'Auth\AuthController@postLogin')->name('post-login');

Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('get-logout');

Route::get('/product/show', 'ProductController@show')->name('show-product');


