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
			return \Redirect::to('/');
		}
		else {
			return \View::make('TrinityCommonViews::Pages.login')
				->with('currentUser', $currentUser);
		}
	}

	/**
	 * redirects to the role-based main page
	 */
	public function redirect() {
		return 'redirect';
	}
}
