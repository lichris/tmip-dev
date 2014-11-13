<?php

namespace MandarinProjects\Trinity\CommonAPIs\Controllers;

class SessionsController extends \BaseController {

	public function attemptToLogin() {
		if ( \Auth::attempt(\Input::only('user_email', 'password')) ) {
			return \Redirect::to('/');
		}
		else {
			return \Redirect::back()->withInput();
		}
	}

}
