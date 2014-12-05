<?php

namespace MandarinProjects\Trinity\CommonAPIs\Routes;

use Illuminate\Support\Facades\Response;

\Route::get('/', array( 'as' => 'trinity.index',
    'uses' => '\MandarinProjects\Trinity\CommonAPIs\Controllers\PagesController@redirect',
    'before' => 'auth' ));

\Route::get('/login', array('as' => 'trinity.login.get',
    'uses' => '\MandarinProjects\Trinity\CommonAPIs\Controllers\PagesController@index' ));

\Route::post('/login', array('as' => 'trinity.login.post',
    'uses' => '\MandarinProjects\Trinity\CommonAPIs\Controllers\SessionsController@attemptToLogin' ));

\Route::get('/logout', array('as' => 'trinity.logout.get',
    'uses' => '\MandarinProjects\Trinity\CommonAPIs\Controllers\SessionsController@attemptToLogout' ));

\Route::post('/logout', array('as' => 'trinity.logout.post',
    'uses' => '\MandarinProjects\Trinity\CommonAPIs\Controllers\SessionsController@attemptToLogout' ));

\Route::get('forgotPassword', array('as' => 'trinity.forgotPassword', function() {
    return "forgotPassword";
    // TODO : implement forgot password page
}));

\Route::get('/profile/small/{id}', function($id = null) {
    $file_location_of_profile_img = \User::find($id)->file_location_of_profile_img;
    $path = __DIR__.'/../../Resources/Images/Profiles/'.$file_location_of_profile_img.'_profile_small.png';
    return \Response::download($path);
});

\Route::get('/profile/big/{id}', function($id = null) {
    $file_location_of_profile_img = \User::find($id)->file_location_of_profile_img;
    $path = __DIR__.'/../../Resources/Images/Profiles/'.$file_location_of_profile_img.'_profile_big.png';
    return \Response::download($path);
});