<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

});


Route::group(['prefix' => 'user'], function () {
    Route::post('/login', 'RegisterController@login')->name('user.login');
    Route::get('/forget', 'RegisterController@passForget')->name('user.password.forget');
    Route::get('/check', 'RegisterController@mobileCheck')->name('user.mobile.check');
    Route::get('/new-pass', 'RegisterController@newPassword')->name('user.new.password');
    Route::post('/new-pass', 'RegisterController@newPasswordStore')->name('user.new.password.store');
});

Route::get('/', 'FrontendController@index')->name('welcome');
