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

Route::get('/',['as' => 'index', 'uses' => 'PagesController@index']);

Route::get('donaciones',['as' => 'donaciones','uses' => 'PagesController@donaciones']);

Route::resource('messages','MessagesController');

Route::get('login',['as'=>'login','uses' => 'Auth\LoginController@ShowLoginForm']);

Route::post('login','Auth\LoginController@login');

Route::get('register',['as'=>'register','uses' => 'Auth\RegisterController@ShowRegistrationForm']);

Route::post('register','Auth\RegisterController@register');

Route::post('logout','Auth\LoginController@logout')->name('logout');