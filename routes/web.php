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

Route::get('news','news_controller@news');

Route::get('news_user','news_controller@news_user');

Route::get('create_news','news_controller@create_news');

Route::get('news_record','news_controller@news_record');

Route::get('delete_news/{id}','news_controller@delete_news');

Route::get('edit_news/{id}','news_controller@edit_news');

Route::get('update_news/{id}','news_controller@update_news');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
