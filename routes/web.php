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

Route::get('/adresse/postCode', 'AdressesController@orderByPostCode');
Route::get('/adresse/city', 'AdressesController@sortByCity');
Route::get('/adresse/addadress','AdressesController@addAdress');
Route::post('/adresse/addadress','AdressesController@store');

Route::get('/adresse/adressmodify/{id}','AdressesController@selectOneToModif');
Route::post('/adresse/adressmodify','AdressesController@modify');

Route::get('/adresse/{id}','AdressesController@delete');

Route::get('/adresses','AdressesController@index');