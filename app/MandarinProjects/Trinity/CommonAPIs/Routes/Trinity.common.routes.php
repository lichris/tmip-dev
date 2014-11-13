<?php

namespace MandarinProjects\Trinity\CommonAPIs\Routes;

\Route::get('/', 'MandarinProjects\Trinity\CommonAPIs\Controllers\PagesController@redirect')
	->before('auth');

\Route::get('login', 'MandarinProjects\Trinity\CommonAPIs\Controllers\PagesController@index');

\Route::post('login', 'MandarinProjects\Trinity\CommonAPIs\Controllers\SessionsController@attemptToLogin');