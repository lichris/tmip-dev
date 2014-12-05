<?php

namespace MandarinProjects\Trinity\CommonAPIs\Controllers;

class SessionsController extends \BaseController {

	public function attemptToLogin() {
		if ( \Auth::attempt(\Input::only('account_email', 'password')) ) {
			return \Redirect::to('/');
		}
		else {
			return \Redirect::back()->withInput();
		}
	}

    public function attemptToLogout() {

        $currentUser = \Auth::user();

        if ($currentUser) {
            \Auth::logout();
        }

        return \Redirect::route('trinity.index');
    }

}
