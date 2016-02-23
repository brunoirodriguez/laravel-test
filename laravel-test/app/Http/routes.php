<?php

Route::group(['middleware' => 'web'], function() {
/* A partir daqui inicia o sistema o anterior pode apagar */
Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');

Route::resource('log','LogController');

Route::resource('genero','GeneroController');

Route::get('logout','LogController@logout');



});

