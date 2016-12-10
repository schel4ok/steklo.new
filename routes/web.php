<?php

/*   Auth Routes (Login, Logout, Register, Forget password)   */
Auth::routes();

/*   Admin section   */
Route::get('/schel4ok', 'AdminController@index');
Route::get('/registered', 'AdminController@registered');





/*   Homepage   */
Route::get('/', function () {   return view('home');   });


/*   Contacts   */
Route::get('/contacts', function () {   return view('contacts');   });