<?php
//Route::middleware('auth')->group(function(){

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('species', 'SpeciesController');
    Route::resource('users', 'UsersController');
//});
