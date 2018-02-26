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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/signup', 'PagesController@signup')->name('signup');
Route::get('/signin', 'PagesController@signin')->name('signin');
Route::get('/viewmessage', 'PagesController@viewmessage')->name('viewmessage');
Route::post('/contact', 'PagesController@store')->name('contact.store');
Route::get('/card', 'PagesController@card')->name('card');
Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');
