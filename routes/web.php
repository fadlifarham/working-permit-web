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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as' => 'dashboard', 'uses' => 'PagesController@showDashboard']);
Route::get('/wp', ['as' => 'wp', 'uses' => 'PagesController@showWP']);
Route::post('/wp', ['as' => 'wp.post', 'uses' => 'WPController@store']);
Route::get('/login', ['as' => 'login', 'uses' => 'PagesController@showLogin']);
Route::get('/register', ['as' => 'register', 'uses' => 'PagesController@showRegister']);
Route::get('/ijinKerja', ['as' => 'ijinKerja', 'uses' => 'PagesController@showIjinKerja']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
