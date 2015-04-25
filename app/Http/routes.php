<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/test', function(){
	echo "hello";
});

Route::get('/parties', function(){
	return View::make('webservices.parties');
});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/landingpage', 'LandingpageController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/authtest',  array('before' =>'auth.basic' , function (){
	return View::make('hello');
}));