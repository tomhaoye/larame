<?php

/*
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
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
|------------------ Resource Route ------------------------
|Verb	Path	                    Action	            Route Name
|GET	   /resource	                index	           resource.index
|GET	   /resource/create	            create      	   resource.create
|POST   /resource	                store	           resource.store
|GET	   /resource/{resource}	        show	           resource.show
|GET    /resource/{resource}/edit	edit	           resource.edit
|PUT/PATCH	/resource/{resource}	update	           resource.update
|DELETE  /resource/{resource}	    destroy            resource.destroy
*/


Route::get('/users/{users}', function (App\User $users) {
    return $users;
})->middleware('throttle:3');

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/index', 'HomeController@index');
    Route::get('/interlocution', 'HomeController@interlocution');
    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('topic', 'TopicsController');
    Route::resource('users', 'UsersController');
});

Route::group(['middleware' => 'auth'], function () {
});
