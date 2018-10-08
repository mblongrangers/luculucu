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
Route::get('blog/{title}', 'PagesController@blog')->name('blog');
Route::get('profile', 'PagesController@profile')->name('profile');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('home', 'PagesController@home')->name('home');
Route::get('/', 'PagesController@root');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
