<?php
  Route::view('/', 'welcome');

  Route::view('/welcome', 'welcome');

  Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
 ?>
