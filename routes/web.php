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
<<<<<<< HEAD
=======
Route::get('/register','PagesController@viewRegister');
>>>>>>> e661d7d74184c6a0a1053ff70bf2a5e8836111af





