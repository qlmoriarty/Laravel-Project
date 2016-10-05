<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/new', 'HomeController@index');
Route::get('/home', 'HomeController@index');
//Contact && AboutPage
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');

//Articles
//
//Route::get('/articles', 'ArticlesController@index');
//Route::get('/articles/create', 'ArticlesController@create');
//Route::get('/articles/{id}', 'ArticlesController@show');
//Route::post('/articles', 'ArticlesController@store');
//
//Route::get('/articles/{id}/edit', 'ArticlesController@edit');

Route::resource('articles', 'ArticlesController');


