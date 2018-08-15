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

Route::get('/tin-tuc/tin-tuc.html', function () {
    return view('Frontsend.tintuc.index');
});

Route::get('/tin-tuc/xay-dung-back-link.html', function () {
    return view('Frontsend.tintuc.tintuc2');
});

Route::get('/tin-tuc/website-chuan-seo-google.html', function () {
    return view('Frontsend.tintuc.tintuc3');
});

Route::get('/tin-tuc/danh-muc-tin-cong-nghe.html', function () {
    return view('Frontsend.tintuc.danhmuc-tintuc');
});

Route::get('/ho-tro.html', function () {
    return view('Frontsend.Pages.hotro');
});

Route::get('dich-vu/hosting.html', function () {
    return view('Frontsend.Hosting.index');
});

Route::get('/chi-tiet.html', function () {
    return view('Frontsend.Details.index');
});

Route::get('/website-xe-hoi.html', function () {
    return view('Frontsend.Details.website-xe-hoi');
});

Route::get('/chi-tiet-web-online-shopping.html', function () {
    return view('Frontsend.Details.index2');
});


Route::get('dich-vu/quan-tri-website.html', function () {
    return view('Frontsend.website_manage.index');
});

Route::post('/send-request-website/send', ['as' => 'mail.send', 'uses' => 'MailController@send']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
