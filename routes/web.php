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

Auth::routes();

Route::namespace('Auth')->group(function () {
    // Controllers Within The "App\Http\Controllers\Auth" Namespace
    Route::get('register/confirm/{token}', 'RegisterController@verifiedEmail')->name('register.confirm');
});

Route::get('/home', 'HomeController@index')->name('home');
