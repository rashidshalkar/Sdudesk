<?php
Route::get('/', function () {
    return view('home_page');
});

Route::get('/', 'HomePageController@index')->name('home_page.index');

Route::get('/lostfound', 'LostAndFoundController@lost')->name('lostfound');
Route::get('/choose', 'LostAndFoundController@choose')->name('choose');

Route::get('/news', 'NewsController@news')->name('news');
Route::get('/more', 'NewsController@more')->name('more');

Route::post('/addlost', 'LostAndFoundController@addlost')->name('addlost');
Route::post('/addfound', 'LostAndFoundController@addfound')->name('addfound');
Route::post('/addcomment', 'LostAndFoundController@addcomment')->name('addcomment');

Route::get('/market', 'LandingPageController@index')->name('market');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');


Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'ShopController@search')->name('search');

Route::get('/search-algolia', 'ShopController@searchAlgolia')->name('search-algolia');