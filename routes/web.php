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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('beheer')->middleware('role:administrator|redacteur|gebruiker')->group(function () {
  Route::get('/', 'BeheerController@index');
  Route::get('/dashboard', 'BeheerController@dashboard')->name('beheer.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
});

Route::get('/home', 'HomeController@index')->name('home');
