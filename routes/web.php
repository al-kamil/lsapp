<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Route::get('/', function () {
return view('welcome');
});

Route::get('/users/{id}', function ($id) {
return 'This is user'. $id;
});
|
 */

Route::get('/', 'PagesController@index');

Route::get('/about', function () {
    $title = 'About us';
    return view('pages.about')->with('title', $title);
});

Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
