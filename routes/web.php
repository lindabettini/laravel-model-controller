<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');

//Rotte Movies
Route::get('/movies', 'MovieController@index')->name('movies.index');
Route::get('/movies/{id}', 'MovieController@show')->name('movies.show');
