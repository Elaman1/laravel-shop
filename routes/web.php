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
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('locale/{locale}', 'MainController@changeLocale')->name('locale');
Route::get('currency/{currencyCode}', 'MainController@changeCurrency')->name('currency');

Route::get('logout', 'Auth\LoginController@logout')->name('get-logout');

Route::middleware(['set_locale'])->group(function() {
        
    Route::middleware(['auth'])->group(function() { 

        Route::group([
            'prefix' => 'person',
            'namespace' => 'Person',
            'as' => 'person.',
        ], function () {
            Route::get('orders', 'OrderController@index')->name('orders.index');
            Route::get('orders/{order}', 'OrderController@show')->name('orders.show');
        });
        
        

        Route::group([
            'middleware' => 'auth',
            'namespace' => 'Admin',
            'prefix' => 'admin',

        ], function () {
            

            Route::resource('categories', 'CategoryController');
            Route::resource('products', 'ProductController');
            Route::resource('products_fulls', 'ProductFullController');
            Route::resource('orders', 'OrderController');
            
            Route::post('/search', 'ProductController@search')->name('searchs');
            Route::post('/search_full', 'ProductFullController@searchFull')->name('searchs_full');
            

            Route::group(['middleware' => 'is_admin'], function() {
                Route::get('orders', 'OrderController@index')->name('home');
                Route::get('orders/{order}', 'OrderController@show')->name('show');
            });
        });
    });


    Route::get('/', 'MainController@index')->name('index');
    Route::get('/contact', 'MainController@contact')->name('contact');
    Route::get('/store', 'MainController@store')->name('store');
    Route::get('/categories', 'MainController@categories')->name('categories');

    Route::get('/amulet', 'MainController@amulet')->name('amulet');
    Route::get('/free_tech', 'MainController@free')->name('free_tech');
    Route::get('/new_products', 'MainController@newProduct')->name('new_products');
    Route::get('/transportation', 'MainController@transportation')->name('transportation');
    Route::get('/reviews', 'MainController@reviews')->name('reviews');

    


    Route::group(['prefix' => 'basket'], function() {
        Route::post('/add/{product}', 'BasketController@basketAdd')->name('basket-add');
        Route::post('/add-full/{product}', 'BasketController@basketAddFull')->name('basket-add-full');
        Route::post('/add-main/{product}', 'BasketController@basketAddMain')->name('basket-add-main');
        Route::post('/add-main-full/{product}', 'BasketController@basketAddFullMain')->name('basket-add-main-full');

        Route::group([
            'middleware' => 'basket_not_empty',
        ], function () {
            Route::get('/', 'BasketController@basket')->name('basket');
            Route::get('/place', 'BasketController@basketPlace')->name('basket-place');
            Route::post('/remove/{product}', 'BasketController@basketRemove')->name('basket-remove');
            Route::post('/remove-full/{product}', 'BasketController@basketRemoveFull')->name('basket-remove-full');
            Route::post('/place', 'BasketController@basketConfirm')->name('basket-confirm');

        });

        

    });


    Route::get('/category/{category}', 'MainController@category')->name('category');
    Route::get('/product/{category}/{product?}', 'MainController@product')->name('product');
    Route::get('/product_fulls/{category}/{product_fulls?}', 'MainController@productFull')->name('product_fulls');


});


