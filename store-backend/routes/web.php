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
Route::get('/','DashboardController@index');
Route::get('/product/{id}/gallery','ProductGalleryController@gallery')->name('product.gallery');
Route::get('/transaction/{id}/set-status','TransactionController@setStatus')->name('transaction.status');

Route::resource('/products','ProductController');
Route::resource('/product-galleries','ProductGalleryController');
Route::resource('/transaction','TransactionController');

Auth::routes(['register'=>true]);

