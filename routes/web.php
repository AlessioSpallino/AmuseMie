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



//LOGGED USER


Route::get('/l', 'EventsController@loggedindex');
Route::get('/eventpagel/{id}', 'EventsController@loggedeventdetails');
Route::get('/myeventpagel/{id}', 'EventsController@myloggedeventdetails');

Route::get('/eventpagel/signup/{id}', 'EventsController@eventsignup');
Route::get('/newevent', 'EventsController@newevent');

//update info
Route::get('/updateeve/{id}', 'EventsController@openupdateeve');
Route::get('/updateass/{id}', 'AssociationsController@openupdateass');
Route::get('/updateevent', 'EventsController@updateeve');
Route::get('/updateassociation', 'AssociationsController@updateass');

Route::post('/signup', [
    'as'   => 'signup',
    'uses' => 'EventsController@newparticipant',
]);

Route::post('/newassociation', [
    'as'   => 'newassociation',
    'uses' => 'AssociationsController@newassociation',
]);

Route::post('/newevent', [
    'as'   => 'newevent',
    'uses' => 'EventsController@newevent',
]);

Route::get('/associationsl', 'AssociationsController@loggedindex');
Route::get('/asspagel/{id}', 'AssociationsController@loggedassociationdetails');
Route::get('/myasspagel/{id}', 'AssociationsController@myloggedassociationdetails');

Route::get('/newass', 'AssociationsController@opennewassociation');
Route::get('/newe', 'EventsController@opennewevent');


View::composer('logged.layout.headerL', function ($view)
{
    $asss = '';
	$admin = DB::table('admin')
                    ->where('user_id', '=', \Auth::user()->id)
                    ->get();


        foreach($admin as $x){
            

            $asss = DB::table('associations')
                                ->where('id', '=', $x->id)
                                ->get();

            break;
        }
	
	$view->with('asss', $asss);
});

View::composer('logged.layout.headerL', function ($view)
{
   $creators = DB::table('events')
                                ->where('creator', '=', \Auth::user()->name)
                                ->get();

     
    $view->with('creators', $creators);
});





