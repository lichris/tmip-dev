<?php

namespace MandarinProjects\Trinity\CommonAPIs\Routes;

\Route::get('/', array( 'as' => 'trinity.index',
    'uses' => '\MandarinProjects\Trinity\CommonAPIs\Controllers\PagesController@redirect',
    'before' => 'auth' ));

\Route::get('/login', array( 'as' => 'trinity.login.get',
    'uses' => '\MandarinProjects\Trinity\CommonAPIs\Controllers\PagesController@index' ));

\Route::post('/login', array( 'as' => 'trinity.login.post',
    'uses' => '\MandarinProjects\Trinity\CommonAPIs\Controllers\SessionsController@attemptToLogin' ));

\Route::get('/logout', array( 'as' => 'trinity.logout.get',
    'uses' => '\MandarinProjects\Trinity\CommonAPIs\Controllers\SessionsController@attemptToLogout' ));

\Route::post('/logout', array( 'as' => 'trinity.logout.post',
    'uses' => '\MandarinProjects\Trinity\CommonAPIs\Controllers\SessionsController@attemptToLogout' ));