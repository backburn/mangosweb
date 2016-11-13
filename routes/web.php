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

//Auth::routes();
// Authentication Routes...
$this->get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm'])->name('login');
$this->post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
$this->post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout'])->name('logout');

// Registration Routes...
$this->get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
$this->post('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
$this->get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
$this->post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
$this->get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
$this->post('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@reset']);

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/realms', ['as' => 'realms', 'uses' => 'RealmsController@index']);
Route::get('/characters', ['as' => 'characters', 'uses' => 'CharactersController@index']);
Route::resource('/accounts', 'AccountsController');
