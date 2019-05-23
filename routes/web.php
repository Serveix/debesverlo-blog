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

Route::get('tags', 'TagController@index')->name('tags.index');
Route::get('tag', 'TagController@create')->name('tags.create');
Route::post('tag', 'TagController@store')->name('tags.store');
Route::post('tag/{tag}', 'TagController@destroy')->name('tags.destroy');

Route::get('post', 'PostController@create')->name('posts.create');
Route::post('post', 'PostController@store')->name('posts.store');
Route::get('/posts/{post}', function() {
   return view('posts.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
