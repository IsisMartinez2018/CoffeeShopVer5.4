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

Route::get('/homevista', function () {
    return view('homevista');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/contactus', function () {
    return view('contactus');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['auth']], function(){
Route::resource('orders', 'ordersController');

});

Route::group(['middleware'=>['auth']], function(){
Route::resource('profile', 'profileController');

});




/*
|--------------------------------------------------------------------------
| rutas del carrito a partir de aqui
|
*/


Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
    
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');

Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');






Route::get('/product', function () {
    return view('product');
});

Route::get('/checkout', function () {
    return view('checkout');
});



