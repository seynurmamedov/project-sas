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

Route::get('/home','Site\ProductsController@getProducts')->name('getHome');
Route::get('/search','Site\LiveSearchController@action')->name('search');
Route::get('/compare','Site\LiveSearchController@action')->name('compare');
Route::get('/', 'Site\ProductsController@getProducts')->name('getHome');

Route::get('/product/{id}', 'Site\ProductsController@getProductSingle')->name('getProductSingle');

Route::get('/collection', function () {
    return view('site.collection-page');
})->name('getCollection');
Route::get('/about', function () {
    return view('site.about-page');
})->name('getAbout');
Route::get('/contact-us', function () {
    return view('site.contact-us-page');
})->name('getContactUs');
Route::get('/shop', 'Site\ShopController@getProductsShop')->name('getShop');


Route::middleware(['auth','auth.admin'])->group(function () {
    Route::get('/admin','Admin\HomeController@getHome')->name('getHomeAdmin');

//User Settings route
    Route::get('settings-user','Admin\UserSettingsController@getSettingsUser')->name('getSettingsUser');
    Route::post('settings-user','Admin\UserSettingsController@postSettingsUser');
//End User Settings route

//Product route
    Route::get('admin/product', 'Admin\ProductController@getProduct')->name('getProduct');
    Route::get('admin/product-delete/{id}', 'Admin\ProductController@getDeleteProduct')->name('getDeleteProduct');

    Route::get('admin/product/insert','Admin\ProductController@getInsertProduct')->name('getInsertProduct');
    Route::post('admin/product/insert','Admin\ProductController@postInsertProduct');

    Route::get('admin/product/edit/{id}', 'Admin\ProductController@getEditProduct')->name('getEditProduct');
    Route::post('admin/product/edit/{id}', 'Admin\ProductController@postEditProduct');

    Route::get('admin/product/edit-image-delete','Admin\ImageController@getImageDelete')->name('getImageDelete');
//End Product route

//Category route
    Route::get('admin/category', 'Admin\CategoryController@getCategory')->name('getCategory');
    Route::post('admin/category', 'Admin\CategoryController@postCategory');
    Route::get('admin/category/{id}', 'Admin\CategoryController@getCategoryDelete')->name('getCategoryDelete');
//End Category route

//Color route
    Route::get('admin/color','Admin\ColorController@getColor')->name('getColor');
    Route::post('admin/color','Admin\ColorController@postColor');
    Route::get('admin/color-delete','Admin\ColorController@getColorDelete')->name('getColorDelete');
//End Color route


//User Settings route
    Route::get('users-list','Admin\UsersListController@getUsersList')->name('getUsersList');
    Route::post('users-list','Admin\UsersListController@postUsersList');
//End User Settings route

//Settings route
    Route::get('admin/settings','Admin\SettingsController@getSettings')->name('getSettings');
    Route::post('admin/settings','Admin\SettingsController@postSettings');
//End Settings route

});
Auth::routes();

