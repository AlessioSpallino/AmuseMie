<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

//events
Route::get('/', 'EventsController@index');
Route::get('/eventpage/{id}', 'EventsController@eventdetails');
Route::get('/eventpage/signup/{id}', 'EventsController@eventsignup');

//associations
Route::get('/associations', 'AssociationsController@index');
Route::get('/asspage/{id}', 'AssociationsController@associationdetails');


//LOGIN
Route::get('/login', 'Auth\LoginController@possibleLogin');

//Route for the Google login
Route::get('google', function () {
    return view('googleAuth');
});
Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');



