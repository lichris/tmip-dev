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
        $userPermission = $currentUser->user_has_permission_of_role_id;
        $roleOfCurrentUser = \Role::where('id', '=', $userPermission)->firstOrFail()->role_name;

        if ($roleOfCurrentUser == 'Administrator') {
            return "Administrator";
        }
        if ($roleOfCurrentUser == 'Consultant') {
            return "Consultant";
        }
        if ($roleOfCurrentUser == 'Student') {
            return \Redirect::route('trinity.students');
        }
        if ($roleOfCurrentUser == 'Instructor') {
            return "Instructor";
        }
        if ($roleOfCurrentUser == 'HR') {
            return "HR";
        }
        if ($roleOfCurrentUser == 'Secretary') {
            return "Secretary";
        }
        if ($roleOfCurrentUser == 'Executive') {
            return "Executive";
        }

        // TODO : build error handler
        return 'bad request will be added error handler';
	}
}
