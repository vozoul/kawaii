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
use App\Product;

Route::get('/', 'PagesController@viewHomePage');
Route::get('/contact', 'PagesController@viewContactPage');
Route::get('/listproducts', 'PagesController@viewListProductPage');
Route::get('/article', 'PagesController@viewProduct');
Route::get('/basket', 'PagesController@viewListBasket');

Route::get('/register','PagesController@viewRegister');
Route::get('/article', 'ProductController@viewProductPage');

// Categories
Route::get('/categories/create', 'CategoriesController@create');
Route::get('/categories/{id}', 'CategoriesController@index');
Route::get('/categories', 'CategoriesController@index');
Route::post('/categories', 'CategoriesController@store');



// Products
Route::get('/productsList', 'ProductsController@productsList');
Route::get('/products/create', 'ProductsController@create');
Route::get('/products/{id}', 'ProductsController@index');
Route::get('/products', 'ProductsController@index');
Route::post('/products', 'ProductsController@store');
Route::get('/products/{id}/edit', 'ProductsController@edit');


// Update a product referenced by id parameter
Route::post('/products/{id}/update', 'ProductsController@update');

// Delete confirmation
Route::get('/products/{id}/delete', 'ProductsController@DeleteYesOrNo');
//Route::get('/products/{id}/delete', function () {
//    return view('delete', [
//        'products' => Product::find(request()->route('id')),
//    ]);
//});


 //Delete a category referenced by id parameter
Route::post('/products/{id}/delete', 'ProductsController@delete');



