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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::prefix('beheer')->middleware('role:administrator|redacteur|gebruiker')->group(function () {
  Route::get('/', 'BeheerController@index');
  Route::get('/dashboard', 'BeheerController@dashboard')->name('beheer.dashboard');
  Route::resource('/gebruikers', 'UserController');
  Route::resource('/artikels', 'PostController');
});

Route::get('/nieuws', 'PostController@publicHomePage');
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/activiteiten', 'HomeController@activiteiten');
Route::get('/informatie', 'HomeController@informatie');
Route::get('/over-ons', 'HomeController@overons');
Route::get('/trainingen', 'HomeController@trainingen');
Route::get('/webshop', 'HomeController@webshop');
Route::resource('artikel', 'PostController');
