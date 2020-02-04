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

Route::get('/home', function () {
    return view('home-page');
});
Route::get('/collection', function () {
    return view('collection-page');
});
Route::get('/about', function () {
    return view('about-page');
});
Route::get('/contact-us', function () {
    return view('contact-us-page');
});
Route::get('/shop', function () {
    return view('shop-page');
});
Route::get('/product', function () {
    return view('product-page');
});