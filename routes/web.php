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
Route::get('/', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{id}', 'CategoryController@detail')->name('categories-detail');

Route::get('/details/{id}', 'DetailController@index')->name('detail');
Route::post('/details/{id}', 'DetailController@add')->name('detail-add');


Route::get('/success', 'CartController@success')->name('success');


Route::get('/checkout/callback', 'CheckoutController@callback')->name('checkout-callback');


Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');



Route::group(['middleware' => ['auth']], function() {
    // cart
    Route::get('/cart', 'CartController@index')->name('cart');
    Route::delete('/cart/{id}', 'CartController@delete')->name('cart-delete');

    // checkout midtrans
    Route::post('/checkout', 'CheckoutController@process')->name('checkout');

    // dashboard user login
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-product');
    Route::get('/dashboard/products/create', 'DashboardProductController@create')->name('dashboard-product-create');
    Route::post('/dashboard/products', 'DashboardProductController@store')->name('dashboard-product-store');
    Route::get('/dashboard/products/{id}', 'DashboardProductController@details')->name('dashboard-product-details');
    Route::post('/dashboard/products/{id}', 'DashboardProductController@update')->name('dashboard-product-update');

    Route::post('/dashboard/products/gallery/upload', 'DashboardProductController@uploadGallery')->name('dashboard-product-gallery-upload');
    Route::get('/dashboard/products/gallery/delete/{id}', 'DashboardProductController@deleteGallery')->name('dashboard-product-gallery-delete');

    Route::get('/dashboard/transactions', 'DashboardTransactionController@index')->name('dashboard-transactions');
    Route::get('/dashboard/transactions/{id}', 'DashboardTransactionController@details')->name('dashboard-transaction-details');
    Route::post('/dashboard/transactions/{id}', 'DashboardTransactionController@update')->name('dashboard-transaction-update');

    Route::get('/dashboard/settings', 'DashboardsettingController@store')->name('dashboard-settings-store');
    Route::get('/dashboard/account', 'DashboardsettingController@account')->name('dashboard-settings-account');
    Route::post('/dashboard/account/{redirect}', 'DashboardsettingController@update')->name('dashboard-settings-redirect');
});

// middleware auth admin

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth', 'admin')
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('product', 'ProductController');
        Route::resource('product-gallery', 'ProductGalleryController');
    });


Auth::routes();

