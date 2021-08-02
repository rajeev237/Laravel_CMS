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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::resource('categories', 'App\Http\Controllers\CategoriesController');
Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::get('trashed-posts', 'App\Http\Controllers\PostsController@trashed')->name('trashed-posts.index');
Route::put('restore-post/{post}', 'App\Http\Controllers\PostsController@restore') ->name ('restore-posts');
