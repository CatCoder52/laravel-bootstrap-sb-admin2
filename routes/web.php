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
Route::get('/tables', function () {
    return view('table');
});
Route::get('/charts', function () {
    return view('msg');
});
Route::get('/blank', function () {
    return view('blank');
});
Route::get('/buttons', function () {
    return view('msg');
});
Route::get('/cards', function () {
    return view('msg');
});
Route::get('/utilities-color', function () {
    return view('msg');
});
Route::get('/utilities-border', function () {
    return view('msg');
});
Route::get('/utilities-animation', function () {
    return view('msg');
});
Route::get('/utilities-other', function () {
    return view('msg');
});
Route::get('/404', function () {
    return view('404');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
