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
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::get('/nowosci', function () {
    return view('nowosci');
});
Route::get('/zapowiedzi', function () {
    return view('zapowiedzi');
});
Route::redirect('/baza/26', 'https://www.youtube.com/watch?v=55-mHgUjZfY');
Route::get('/baza', 'FilmController@baza');
Route::post('/baza', 'FilmController@baza');
Route::get('/panel', 'FilmController@panel')->middleware('verified');
Route::post('/panel', 'FilmController@oddaj')->middleware('verified');
Route::get('/ustawienia', 'FilmController@ustawienia')->middleware('verified');
Route::post('/ustawienia', 'FilmController@zmiany')->middleware('verified');
Route::post('/baza/{id}', 'FilmController@wypozycz')->middleware('verified');
Route::get('/baza/{id}', 'FilmController@show');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
