<?php

namespace MandarinProjects\Trinity\CommonAPIs\Controllers;

class PagesController extends \BaseController {

	/**
	 * If User is not logged in,
	 * Displays the login page
	 * Otherwise, passes to redirect function
	 *
	 * @return Response
	 */
	public function index()
	{
		$currentUser = \Auth::user();
		if ($currentUser) {
			return \Redirect::action('\MandarinProjects\Trinity\CommonAPIs\Controllers\PagesController@redirect');
		}

        return \View::make('TrinityCommonViews::Pages.login')->with('currentUser', $currentUser);
	}

	/**
	 * redirects to the role-based main page
	 */
	public function redirect() {
        $currentUser = \Auth::user();
        $role = $currentUser->role;

        return \Redirect::route('trinity.'.$role->name);

        // TODO : build error handler
        return 'bad request will be added error handler';
	}
}
