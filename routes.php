<?php
  // file: routes.php
	  
  Route::resource('professor', 'ProfessorController');
  
  Route::get('/professor/(:number)/delete','ProfessorController@destroy');
  
  Route::get('/','ProfessorController@index');

  Route::get('/professor/list','ProfessorController@index');

  Route::dispatch();
?>