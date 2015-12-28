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

Route::get('/', function () {
    return view('welcome');
});


// Users route

Route::get('/home', ['uses' => 'UserController@getHome']);
Route::controller('/user', 'Auth\AuthController');
Route::controller('/password', 'Auth\PasswordController');
 
// Admin route
Route::get('/admin/home', ['uses' => 'AdminController@getHome']);
Route::controller('/admin/password', 'Auth\AdminPasswordController');
Route::controller('/admin', 'Auth\AdminController');
