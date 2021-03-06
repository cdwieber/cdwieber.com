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

Auth::routes();

//Index route
Route::get('/', 'HomeController@index');

//Blog Routes
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', function($slug) {
    return 'Post' . $slug;
});

//Project Routes
Route::get('/projects', 'ProjectController@index');
Route::get('/projects/{slug}');

//Static page controllers
Route::get('/resume', 'ResumeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
    Route::post('/contact', 'ContactController@sendMail');
