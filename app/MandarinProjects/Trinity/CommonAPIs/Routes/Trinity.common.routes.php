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

\Route::get('profile/small/{user_id}', function($user_id = null) {
    $path = __DIR__.'/../../Resources/Images/Profiles/user_profile_'.$user_id.'_140_140.png';
    //if (file_exists($path)) {
        return \Response::download($path);
    //}
    dd($path);
});

\Route::get('profile/big/{user_id}', function($user_id = null) {
    $path = __DIR__.'/../../Resources/Images/Profiles/user_profile_'.$user_id.'_540_393.png';
    //if (file_exists($path)) {
        return \Response::download($path);
    //}
    dd($path);
});