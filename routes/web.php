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
Route::get('/article', 'PagesController@viewProduct');
Route::get('/basket', 'PagesController@viewListBasket');

Route::get('/register','PagesController@viewRegister');
Route::get('/article', 'ProductController@viewProductPage');

// Categories

Route::get('/categories/{id}', 'CategoriesController@index');
Route::get('/categories', 'CategoriesController@index');
Route::post('/categories', 'CategoriesController@store');
Route::get('/categories/create', 'CategoriesController@create');

// Products
Route::get('/products/{id}', 'ProductController@index');
Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');
Route::get('/products/create', 'ProductController@create');
