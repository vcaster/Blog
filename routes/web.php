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

Route::get('/', [
  'uses' => 'BlogController@index',
  'as' => 'blog'
]);

Route::get('/blog/{post}',  [
  'uses' => 'BlogController@show',
  'as' => 'blog.show'
]);//Route::Resourse('posts','PostController');

Route::get('/category/{category}',  [
  'uses' => 'BlogController@category',
  'as' => 'category'
]);
Route::get('/author/{author}',  [
  'uses' => 'BlogController@author',
  'as' => 'author'
]);

Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('/backend/blog', 'Backend\BlogController');
Route::POST("/backend/blog/create", "Backend\BlogController@create")->name("backend.blog.create");
Route::POST("/backend/blog/index", "Backend\BlogController@index")->name("backend.blog.index");
