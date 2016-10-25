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
      Route::get('/add','Backend\EquipoController@add');
      Route::post('/create','Backend\EquipoController@create');
    });

});
