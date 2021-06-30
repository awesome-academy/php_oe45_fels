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

Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'ChangelanguageController@changeLanguage')
        ->name('user.change-language');

    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('topic', 'HomeController@topic')->name('topic');
});

