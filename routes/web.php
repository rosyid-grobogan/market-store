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

Route::get('/', 'FrontEnd\HomeController@index')->name('home');
Route::get('/categories', 'FrontEnd\CategoryController@index')->name('categories');
Route::get('/categories/{slug}', 'FrontEnd\CategoryController@detail')->name('categories-detail');
Route::get('/products', 'FrontEnd\ProductController@index')->name('products');
Route::get('/products/{slug}', 'FrontEnd\ProductController@detail')->name('product-detail');
Route::get('/cart', function () {
    return view('pages.cart');
});
Route::get('/success', function () {
    return view('pages.transaction-success');
});
Route::get('/register-success', function () {
    return view('pages.register-success');
});


Auth::routes();


Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/dashboard/products', function () {
    return view('pages.dashboard-products');
});
Route::get('/dashboard/products/details', function () {
    return view('pages.dashboard-products-details');
});
Route::get('/dashboard/products/create', function () {
    return view('pages.dashboard-products-create');
});

Route::get('/dashboard/transactions', function () {
    return view('pages.dashboard-transactions');
});
Route::get('/dashboard/transactions/{id}', function () {
    return view('pages.dashboard-transactions-details');
});

Route::get('/dashboard/settings', function () {
    return view('pages.dashboard-settings');
});
Route::get('/dashboard/account', function () {
    return view('pages.dashboard-account');
});

// Admin
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('categories', 'CategoryController');
        Route::resource('users', 'UserController');
        Route::resource('products', 'ProductController');
        Route::resource('galleries', 'ProductGalleryController');
    });
