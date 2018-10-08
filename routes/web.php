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
Route::post('feedback', 'PagesController@sendfeedback')->name('send.feedback');
Route::get('feedback', 'PagesController@feedback')->name('feedback');
Route::get('blog/{title}', 'PagesController@blog')->name('blog');
Route::get('profile', 'PagesController@profile')->name('profile');
Route::post('contact', 'PagesController@sendContact')->name('send.contact');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('home', 'PagesController@home')->name('home');
Route::get('/', 'PagesController@root');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
