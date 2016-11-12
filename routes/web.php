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

Route::get('/', ['as' => 'welcome', 'uses' => function () {
    return view('welcome');
}]);

Auth::routes();

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/realms', ['as' => 'realms', 'uses' => 'RealmsController@index']);
Route::get('/characters', ['as' => 'characters', 'uses' => 'CharactersController@index']);
Route::resource('/accounts', ['as' => 'accounts', 'uses' => 'AccountsController']);
