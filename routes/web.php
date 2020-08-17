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
    return view('pages.home');
});
Route::get('/categories', function () {
    return view('pages.category');
});
Route::get('/cart', function () {
    return view('pages.cart');
});
Route::get('/success', function () {
    return view('pages.transaction-success');
});
Route::get('/register-success', function () {
    return view('pages.register-success');
});
Route::get('/products/details', function () {
    return view('pages.detail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
