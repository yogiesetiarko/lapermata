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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/artikel', 'HomeController@artikel')->name('artikel');
Route::get('/tambahartikel', 'HomeController@tambahartikel')->name('tambahartikel');
