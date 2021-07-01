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

Route::get('change-language/{language}', 'ChangelanguageController@changeLanguage')->name('language');

Route::get('/topic', 'StartLessonController@index')->name('topic');

Route::get('/topic/{id}', 'StartLessonController@show')->name('lesson');

Route::name('')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
});

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/words', 'WordController');

Route::get('words/{filter}/filter', 'WordController@filter')->name('words.filter');

Route::resource('/user', 'UserController');
