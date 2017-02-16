<?php


Route::get('/', 'LandingController@landing');


// credential routes 

Route::get('signin', 'CredentialsController@index');

Route::post('signin-user', 'CredentialsController@compare');

// end credential routes