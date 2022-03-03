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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about_us', 'PagesController@about_us')->name('about_us');
Route::get('/achievements', 'PagesController@achievements')->name('achievements');
Route::get('/news_details', 'PagesController@news_details')->name('1st_news_details');
Route::post('/contact_us', 'PagesController@postContact')->name('contact-us');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');
