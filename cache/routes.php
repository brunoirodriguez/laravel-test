<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

/* Um teste de route personalizado */

Route::get('teste', function(){
    return "Holá enviado de routes.php";
});

/* segundo teste com parametros */
Route::get('nome/{nome}', function($nome){
    return "Meu nome e ".$nome;
});

/* Terceiro teste */
Route::get('idade/{idade?}', function($idade = 20){
    return "Eu tenho ".$idade." anos";
});

/* Teste de referencia de uma função de um controlador*/
Route::get('controlador','testeController@index');

/* Segundo teste do controlador */
Route::get('nome/{nome}','testeController@nome');


/* Aqui vamos criar um Controller RestFull */
Route::resource('movie','MovieController');


/* A partir daqui inicia o sistema o anterior pode apagar */
Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');

