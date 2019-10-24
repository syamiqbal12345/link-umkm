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

Route::get('/login', function () {
    return view('login');
});

Route::get('/makananberat', function () {
    return view('makananberat');
});

Route::get('/makananringan', function () {
    return view('makananringan');
});

Route::get('/minuman', function () {
    return view('minuman');
});

Route::get('/kerajinan', function () {
    return view('kerajinan');
});

Route::get('/lainlain', function () {
    return view('lainlain');
});