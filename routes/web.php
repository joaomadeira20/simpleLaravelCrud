<?php
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


Route::prefix('products')->group(function () {
	Route::post('/create', 'App\Http\Controllers\ProductsController@create');
	Route::put('/update/{id}', 'App\Http\Controllers\ProductsController@update');
	Route::delete('/delete/{id}', 'App\Http\Controllers\ProductsController@delete');
	Route::get('/list', 'App\Http\Controllers\ProductsController@list');
});
