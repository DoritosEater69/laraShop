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
    return view('frontend.home.welcome');
})->name('home');

Route::get('/hoodies', function () {
    return view('frontend.partials.hoodies');
})->name('hoodies');

Route::get('/pants', function () {
    return view('frontend.partials.pants');
})->name('pants');

Route::get('/shirts', function () {
    return view('frontend.partials.shirts');
})->name('shirts');

Route::get('/shoes', function () {
    return view('frontend.partials.shoes');
})->name('shoes');

Auth::routes();

