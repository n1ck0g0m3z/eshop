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
Route::get('/list', ['middleware' => 'auth', 'uses' => 'BookController@getIndex']);
Route::get('auth/register', 'AuthAuthController@getRegister');
Route::post('auth/register', 'AuthAuthController@postRegister');
Route::get('auth/login', 'AuthAuthController@getLogin');
Route::post('auth/login', 'AuthAuthController@postLogin');
Route::get('auth/logout', 'AuthAuthController@getLogout');

Route::get('/cart', array('before'=>'auth.basic','as'=>'cart','uses'=>'CartController@getIndex'));
Route::post('/cart/add', array('before'=>'auth.basic','uses'=>'CartController@postAddToCart'));
Route::get('/cart/delete/{id}', array('before'=>'auth.basic','as'=>'delete_book_from_cart','uses'=>'CartController@getDelete'));
Route::post('/order', array('before'=>'auth.basic','uses'=>'OrderController@postOrder'));
Route::get('/user/orders', array('before'=>'auth.basic','uses'=>'OrderController@getIndex'));
Route::auth();

Route::get('/home', 'HomeController@index');
