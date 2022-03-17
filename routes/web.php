<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MovieController@index')->name('home');

//Rotte Movies
Route::get('/movies', 'MovieController@index')->name('movies.index');
Route::get('/movies/{id}', 'MovieController@show')->name('movies.show');
