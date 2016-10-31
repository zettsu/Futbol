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
    Route::get('/logout', 'BackendController@logout');  
    Route::get('/','BackendController@dash');
    Route::get('/last_activity','BackendController@last_activity');

    Route::group(['prefix'=>'equipo'],function(){
      Route::get('/show/{id}','Backend\EquipoController@show');
      Route::post('/store','Backend\EquipoController@store');
      Route::get('/create','Backend\EquipoController@create');
      Route::get('/edit/{id}','Backend\EquipoController@edit');
      Route::put('/update/{id}','Backend\EquipoController@update');
      Route::patch('/update/{id}','Backend\EquipoController@update');
      Route::get('/actions','Backend\EquipoController@actions');
    });

    Route::group(['prefix'=>'partido'],function(){
      Route::get('/show/{id}','Backend\PartidoController@show');
      Route::post('/store','Backend\PartidoController@store');
      Route::get('/create','Backend\PartidoController@create');
      Route::get('/edit/{id}','Backend\PartidoController@edit');
      Route::put('/update/{id}','Backend\PartidoController@update');
      Route::patch('/update/{id}','Backend\PartidoController@update');
      Route::get('/actions','Backend\PartidoController@actions');
    });

    Route::group(['prefix'=>'pais'],function(){
      Route::get('/add','Backend\PaisController@add');
      Route::put('/create','Backend\PaisController@create');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index');
