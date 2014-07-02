<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('api/getUsers', 'ApiController@getIndex');
Route::get('api/getHobby', 'ApiController@getHobby');
Route::get('api/addNewUser/{name}/{age}/{hobby}', 'ApiController@addNewUser');
Route::get('api/deleteUser/{id}', 'ApiController@deleteUser');