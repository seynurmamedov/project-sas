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


Route::get('/admin','Admin\HomeController@getHome')->name('getHomeAdmin');

Route::get('admin/settings','Admin\SettingsController@getSettings')->name('getSettings');
Route::post('admin/settings','Admin\SettingsController@postSettings');

Route::get('admin/color','Admin\ColorController@getColor')->name('getColor');
Route::post('admin/color','Admin\ColorController@postColor');
Route::get('admin/color/{id}','Admin\ColorController@getColorDelete')->name('getColorDelete');

Route::get('admin/category', 'Admin\CategoryController@getCategory')->name('getCategory');
Route::post('admin/category', 'Admin\CategoryController@postCategory');
Route::get('admin/category/{id}', 'Admin\CategoryController@getCategoryDelete')->name('getCategoryDelete');


Route::get('admin/product', 'Admin\ProductController@getProduct')->name('getProduct');
Route::get('admin/product/insert','Admin\ProductController@getInsertProduct')->name('getInsertProduct');
Route::post('admin/product/insert','Admin\ProductController@postInsertProduct');
// Route::get('admin/product/edit/{id}', 'Admin\ProductController@getInsertProduct')->name('getEditProduct');

