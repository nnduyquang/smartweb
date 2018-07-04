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
    return view('Frontsend.Home.index');
});

Route::get('/website-mau.html', function () {
    return view('Frontsend.Webmau.index');
});

Route::get('/bang-gia.html', function () {
    return view('Frontsend.price_list.index');
});


Route::get('/ho-tro.html', function () {
    return view('Frontsend.Pages.hotro');
});
Route::get('/hosting.html', function () {
    return view('Frontsend.Hosting.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
