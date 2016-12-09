<?php

  // General
  Route::get('/logout', 'BackendController@logout');


  // Users
  Route::get('/user', 'UserController@view');
  Route::post('/create_usersys', 'UserController@create');


  // User permissions
  Route::get('/roles','RoleCreatorController@view');
  Route::post('/create_role','BackendController@createRole');


  // Panel
  Route::get('/','BackendController@dash');


  // Components
  Route::get('last_activity','BackendController@last_activity');


  // Emails
  Route::get('loadmessagesender','BackendController@loadmessagesender');
  Route::post('/new_message','BackendController@new_message');


  // Equipos actions
  Route::group(['prefix'=>'equipo'], function() {
    Route::get('/show/{id}','Backend\EquipoController@show');
    Route::post('/store','Backend\EquipoController@store');
    Route::get('/create','Backend\EquipoController@create');
    Route::get('/edit/{id}','Backend\EquipoController@edit');
    Route::put('/update/{id}','Backend\EquipoController@update');
    Route::patch('/update/{id}','Backend\EquipoController@update');
    Route::get('/actions','Backend\EquipoController@actions');
  });


  // Partidos actions
  Route::group(['prefix'=>'partido'], function() {
    Route::get('/show/{id}','Backend\PartidoController@show');
    Route::post('/store','Backend\PartidoController@store');
    Route::get('/create','Backend\PartidoController@create');
    Route::get('/edit/{id}','Backend\PartidoController@edit');
    Route::put('/update/{id}','Backend\PartidoController@update');
    Route::patch('/update/{id}','Backend\PartidoController@update');
    Route::get('/actions','Backend\PartidoController@actions');
  });


  // Pais actions
  Route::group(['prefix'=>'pais'], function() {
    Route::get('/add','Backend\PaisController@add');
    Route::put('/create','Backend\PaisController@create');
  });
