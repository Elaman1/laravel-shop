<?php


// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', 'MainController@index')->name('home');
Route::get('/categories', 'MainController@categories')->name('categories');

Route::get('/cart', 'CartController@index')->name('cart');

Route::get('/order', 'CartController@order')->name('order');

Route::post('/cart/add/{id}', 'CartController@addToCart')->name('cart-add');
Route::post('/cart/remove/{id}', 'CartController@removeToCart')->name('cart-remove');


Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product?}', 'MainController@product')->name('product');
