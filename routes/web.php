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

Route::get('/', 'PagesController@viewHomePage');
Route::get('/contact', 'PagesController@viewContactPage');
Route::get('/listproducts', 'PagesController@viewListProductPage');
Route::get('/product', 'PagesController@viewProduct');
Route::get('/basket', 'PagesController@viewListBasket');
Route::get('/users', 'UsersController@index');

Route::get('/customer', 'CustomerController@index');
Route::get('/customer/{id}', 'CustomerController@index');

//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController',
//
//]);
