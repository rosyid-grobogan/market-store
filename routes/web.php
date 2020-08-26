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

Route::post('/checkout/callback', 'FrontEnd\CheckoutController@callback')->name('midtrans.callback');


// Auth
Route::get('/register-success', function () {
    return view('pages.register-success');
});

Route::group(['middleware' => ['auth']], function() {
    // Cart
    Route::post('/products/{id}', 'FrontEnd\CartController@store')->name('add-cart');
    Route::get('/cart', 'FrontEnd\CartController@index')->name('cart');
    Route::delete('cart/{id}', 'FrontEnd\CartController@destroy')->name('cart.destroy');
    Route::post('/checkout', 'FrontEnd\CheckoutController@prosess')->name('checkout');

});

Auth::routes();

// Dashboard
Route::prefix('dashboard')
    ->namespace('FrontEnd')
    ->middleware(['auth'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');

    });

// Dashboard
Route::prefix('dashboard')
    ->namespace('Dashboard')
    ->middleware(['auth'])
    ->group(function() {
        Route::get('products', 'ProductController@index')->name('dashboard.products');
        Route::post('products', 'ProductController@store')->name('dashboard.products.store');
        Route::get('products/create', 'ProductController@create')->name('dashboard.products.create');
        Route::get('products/{id}', 'ProductController@show')->name('dashboard.products.details');
        Route::post('products/{slug}', 'ProductController@update')->name(('dashboard.products.update'));
        Route::post('products/gallery/upload', 'ProductController@uploadGallery')->name(('dashboard.galleries.upload'));
        Route::post('products/gallery/delete/{id}', 'ProductController@deleteGallery')->name(('dashboard.galleries.destroy'));

        Route::get('/transactions', 'TransactionController@index')->name('dashboard.transactions');
        Route::get('/transactions/{id}', 'TransactionController@show')->name('dashboard.transactions.detail');

        //
        Route::get('settings', 'SettingController@edit')->name('dashboard.settings');
        Route::put('settings', 'SettingController@update')->name('dashboard.settings.update');

        Route::get('account', 'AccountController@index')->name('dashboard.account');
        Route::put('account/{id}', 'AccountController@update')->name('dashboard.account.update');
    });



// Admin
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
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
