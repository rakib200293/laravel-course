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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index');
Route::get('contact', 'ContactController@contact');
Route::get('about', 'AboutController@about');
Route::get('doctors', 'DoctorsController@doctors');
Route::get('services', 'ServicesController@services');
Route::get('blog', 'BlogController@blog');

Route::get('test', function(){
	return "welcome to laravel course";
});
