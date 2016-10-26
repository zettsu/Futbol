<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'backend'], function () {
    Route::get('/','BackendController@dash');
    Route::get('/last_activity','BackendController@last_activity');

    Route::group(['prefix'=>'equipo'],function(){
      Route::post('/store','Backend\EquipoController@store');
      Route::get('/create','Backend\EquipoController@create');
      Route::get('/edit/{id}','Backend\EquipoController@edit');
      Route::get('/update/{id}','Backend\EquipoController@update');
    });

    Route::group(['prefix'=>'partido'],function(){
      Route::get('/add','Backend\PartidoController@add');
      Route::put('/create','Backend\PartidoController@create');
    });

    Route::group(['prefix'=>'pais'],function(){
      Route::get('/add','Backend\PaisController@add');
      Route::put('/create','Backend\PaisController@create');
    });

});
