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

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/history', 'history')->name('history');
//----------interface----------

//--------------------ADMIN--------------------
Route::group(['prefix' => 'admin'], function () {
//---------- Login Admin
    Route::get('/login', 'AdminController@getLogin')->name('admin.get.login');
    Route::post('/login', 'AdminController@postLogin')->name('admin.post.login');
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/', 'AdminController@index')->name('admin.get.index');
        Route::get('/logout', 'AdminController@getLogout')->name('admin.get.logout');


        Route::group(['prefix' => 'categories'], function () {
            Route::get('/index', 'CategoryController@index')->name('admin.categories.index');
            Route::get('/create', 'CategoryController@create')->name('admin.categories.create');
            Route::post('/store', 'CategoryController@store')->name('admin.categories.store');
            Route::get('/{id}/show', 'CategoryController@show')->name('admin.categories.show');
            Route::get('/{id}/edit', 'CategoryController@edit')->name('admin.categories.edit');
            Route::post('/{id}/update', 'CategoryController@update')->name('admin.categories.update');
            Route::get('/destroy/{id}', 'CategoryController@destroy')->name('admin.categories.destroy');
        });/*group - prefix 'categories'*/
        Route::group(['prefix' => 'posts'], function () {
            Route::get('/index', 'PostController@index')->name('admin.posts.index');
            Route::get('/create', 'PostController@create')->name('admin.posts.create');
            Route::post('/store', 'PostController@store')->name('admin.posts.store');
            Route::get('/{id}/show', 'PostController@show')->name('admin.posts.show');
            Route::get('/{id}/edit', 'PostController@edit')->name('admin.posts.edit');
            Route::post('/{id}/update', 'PostController@update')->name('admin.posts.update');
            Route::get('/destroy/{id}', 'PostController@destroy')->name('admin.posts.destroy');
        });/*group - prefix 'news'*/
    });/*group - middleware 'admin'*/
});/*group - prefix - 'admin'*/


//----------clear----------
Route::get('/clear', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    return "View, Cache, Config & Route is cleared";
});
