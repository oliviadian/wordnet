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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/SeputarLaman', function () {
    return view('seputarlaman');
});

Route::get('/Pencarian', function () {
    return view('pencarian');
});

Route::get('/Login', function () {
    return view('login');
});

Route::get('/Daftar', function () {
    return view('daftar');
});

Route::get('/seputarlaman/login', function () {
    return view('seputarlaman-al');
});

Route::get('/kedalamankata/login', function () {
    return view('kedalamankata-al');
});