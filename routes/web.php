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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('players', 'PlayerController');

Route::resource('positions', 'PositionController');

Route::resource('languages', 'LanguageController');

Route::resource('nationalities', 'NationalityController');

Route::resource('playerPositions', 'PlayerPositionController');

Route::resource('playerLanguages', 'PlayerLanguageController');

Route::resource('clubs', 'ClubController');

Route::resource('countries', 'CountryController');