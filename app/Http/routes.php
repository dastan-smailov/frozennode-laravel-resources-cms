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
Route::auth();

Route::get('/', ['as' => 'home', 'uses' => 'IndexController@home']);
Route::get('category/{slug}', ['as' => 'category', 'uses' => 'IndexController@category']);
//Route::get('search/{q}', ['as' => 'search', 'uses' => 'IndexController@search']);
Route::get('/{slug}', ['as' => 'single', 'uses' => 'IndexController@single']);




Route::get('/home', 'HomeController@index');
