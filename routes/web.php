<?php

Route::get('/', 'InclusionController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
