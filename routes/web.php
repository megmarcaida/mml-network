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



Auth::routes();


Route::get('/', function () {
    return Redirect::away('http://localhost/mml/');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', 'HomeController@index')->name('home');

});

Route::group(['middleware' => ['auth','admin']], function () {

    Route::get('/admin', function () {
        return view('/admin/dashboard');
    });
});