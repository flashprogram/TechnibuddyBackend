	<?php

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Credentials: true');

	/*=
		
	|--------------------------------------------------------------------------
	| Routes File
	|--------------------------------------------------------------------------
	|
	| Here is where you will register all of the routes in an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the controller to call when that URI is requested.
	|
	*/
/*
	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

*/
	Route::get('/', function () {
	    return view('index');
	});
	
	Route::group(['prefix' => 'api'], function()
	{

		
		Route::resource('authenticate', 'AuthenticateController',['middleware' => ['cors']], ['only' => ['index']]);
		Route::post('authenticate','AuthenticateController@authenticate',['middleware' => ['cors']]);
	    Route::get('getUserData', 'AuthenticateController@getAuthenticatedUser');

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

