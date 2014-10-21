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

//  the test routes comes under and please comment out after use
//
//

Route::get('/dashboard', function()
{
    return View::make('layouts.after_login.master');
});

//
//
// end of the test routes
Route::get('/', 'SessionsController@index');


Route::resource('sessions', 'SessionsController');