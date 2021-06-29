<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChangelanguageController;
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
});
Route::get('/', 'UserController@home')->name('/');
Route::get('topic', 'UserController@topic')->name('topic');
Route::get('topic/{id}','UserController@lesson');
