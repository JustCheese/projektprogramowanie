<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/logowanie', function () {
    return view('logowanie');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/panel', 'FilmController@panel')->middleware('verified');
Route::get('/ustawienia', 'FilmController@ustawienia')->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
