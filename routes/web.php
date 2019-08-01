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
    return view('support');
});


Route::get('/scan', function () {
    return view('scan');
});

Route::get('/scan/macedonio', function () {
    return view('scanMacedonio');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/privacy/armada', function () {
    return view('privacy');
});

Route::get('/privacy/macedonio', function () {
    return view('privacyMacedonio');
});

Route::post('contact', 'ContactController@store')->name('contact.store');