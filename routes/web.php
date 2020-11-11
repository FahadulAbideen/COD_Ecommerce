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

Route::get('/','App\Http\Controllers\PagesController@index')->name('index');
Route::get('/contact','App\Http\Controllers\PagesController@contact')->name('contact');
Route::get('/about','App\Http\Controllers\PagesController@about')->name('about');
Route::get('/dashboard','App\Http\Controllers\PagesController@dashboard')->name('dashboard');