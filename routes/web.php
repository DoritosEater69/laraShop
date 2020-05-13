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

Route::get('/', [
    'uses' => 'CategoriesController@getIndex',
    'as' => 'Categories.categories'
]);

Route::get('/{category}', function ($category) {
     return view('frontend.home.welcome');
});

Route::get('/', function () {
    return view('frontend.home.welcome');
})->name('home');

Route::get('/hoodies', [
    'uses' => 'ProductController@getIndex',
    'as' => 'Product.hoodies'
]);

Route::get('/pants', function () {
    return view('frontend.partials.pants');
})->name('pants');

Route::get('/shirts', function () {
    return view('frontend.partials.shirts');
})->name('shirts');

Route::get('/shoes', function () {
    return view('frontend.partials.shoes');
})->name('shoes');

Route::get('/vision', function () {
    return view('frontend.partials.vision');
})->name('vision');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');


Auth::routes();

