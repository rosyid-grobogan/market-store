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

// Home
Route::get('/', 'FrontEnd\HomeController@index')->name('home');
Route::get('/categories', 'FrontEnd\CategoryController@index')->name('categories');
Route::get('/categories/{slug}', 'FrontEnd\CategoryController@detail')->name('categories-detail');
Route::get('/products', 'FrontEnd\ProductController@index')->name('products');
Route::get('/products/{slug}', 'FrontEnd\ProductController@detail')->name('product-detail');

// Cart
Route::post('/products/{id}', 'FrontEnd\CartController@store')->name('add-cart');
Route::get('/cart', 'FrontEnd\CartController@index')->name('cart');
Route::delete('cart/{id}', 'FrontEnd\CartController@destroy')->name('cart.destroy');
// Auth
Route::get('/register-success', function () {
    return view('pages.register-success');
});


Auth::routes();

// Dashboard
Route::prefix('dashboard')
    ->namespace('FrontEnd')
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/products', 'DashboardController@products')->name('dashboard-products');
        Route::get('/products/{slug}', 'DashboardController@detail')->name('products-detail');
        Route::get('/settings', 'DashboardController@settings')->name('settings');
        Route::get('/account', 'DashboardController@account')->name('account');
        Route::get('/transactions', 'DashboardController@transactions')->name('dashboard-transactions');
        Route::get('/transactions/{id}', 'DashboardController@transactionDetail')->name('transactions-detail');
    });

Route::get('/dashboard/products/create', function () {
    return view('pages.dashboard-products-create');
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

// Pages
Route::get('/success', function () {
    return view('pages.transaction-success');
});
