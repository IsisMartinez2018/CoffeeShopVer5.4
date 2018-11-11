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


