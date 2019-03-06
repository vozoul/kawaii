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

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@viewHomePage');

Route::get('/contact', 'PagesController@viewContactPage');

Route::get('/listproducts', 'PagesController@viewListProductPage');

Route::get('/product', 'PagesController@viewProduct');

Route::get('/basket', 'PagesController@viewListBasket');

Route::get('/addresses','AdressesController@viewAdresses');

//products
Route::get('/products', 'ProductsController@create');
Route::get('/products/{id}','ProductsController@index');
Route::get('/products','ProductsController@index');
Route::post('/create','ProductsController@store');
Route::get('/create','ProductsController@addProduct');
Route::get('/modify/{id}','ProductsController@modifyProduct');
Route::post('/modify','ProductsController@modify');
Route::get('/delete/{id}','ProductsController@deleteProduct');
//categories

Route::get('/categories/{id}','CategoriesController@index');
Route::get('/categories','CategoriesController@index');
Route::post('/categories','CategoriesController@store');