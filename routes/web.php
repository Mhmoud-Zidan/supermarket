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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('products' , [ProductController::class,'index']);
//Route::get('products', 'App\Http\Controllers\ProductController@index');

Route::resource('products', 'ProductController');

Route::get('soft/deletes/{id}', 'ProductController@softDelete')
    ->name('soft.delete');

Route::get('product/trash', 'ProductController@trash')
    ->name('products.trash');

Route::get('product/restore/{id}', 'ProductController@restore')
    ->name('product.restore');

Route::get('product/forceDelete/{id}', 'ProductController@forceDelete')
    ->name('product.forceDelete');
