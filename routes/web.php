<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
// after all add routes in web or api you should refresh the rout list by use
// php artisan route:clear and 'php artisan cache:clear' and you can shorten
// these lines by use 'php artisan optimize'
// if i use 'php artisan optimize' laravel not allowed to optimize if there is
// function in the routs like this:
// Route::get('/', function () {
////    return view('welcome');
////});
Auth::routes();
Route::resource('seller','SellerController');
Route::resource('product','ProductController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('changeStatus', 'ProductController@changeStatus');
Route::get('/', 'loginController@welcome');

//i can use group of routs to shortcut this lines but because i use this name in views its hard .
//view all stores
Route::get('/store_index', 'StoreController@index')->name('store.index');
//view the create form to create store
Route::get('/create', 'StoreController@create')->name('store.create');
//add new store to handel submit form by post method
Route::post('/add', 'StoreController@store')->name('store.store');
//view edit store form
Route::get('/ed/{id}', 'StoreController@edit')->name('store.edit');
//edit new store to handel submit form by post method
Route::post('/edit/{id}', 'StoreController@update')->name('store.update');
// handel submit delete button in store index.
Route::get('/de/{id}', 'StoreController@destroy')->name('store.delete');

//-----------------------------------------------------------------------
//view All Currencies ;
Route::get('/index', 'CurruncyController@index')->name('index');
//delete rout to handel the delete submit
Route::delete('/seller/{id}/destroy', 'SellerController@destroy')->name('des');
