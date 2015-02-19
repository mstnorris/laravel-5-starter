<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');

Route::get('home', 'HomeController@index');

Route::get('login', ['as' => 'login_path', 'uses' => 'Auth\AuthController@getLogin']);
Route::get('register', ['as' => 'register_path', 'uses' => 'Auth\AuthController@getRegister']);
Route::get('logout', ['as' => 'logout_path', 'uses' => 'Auth\AuthController@getLogout']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
