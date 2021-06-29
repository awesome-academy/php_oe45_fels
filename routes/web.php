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
    Auth::routes();
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/topic', 'StartLessonController@index')->name('topic');
    Route::get('/topic/{id}', 'StartLessonController@show')->name('lesson');
