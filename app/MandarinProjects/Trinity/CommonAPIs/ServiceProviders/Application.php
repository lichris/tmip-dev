<?php

namespace MandarinProjects\Trinity\CommonAPIs\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class Application extends ServiceProvider {

	/**
	 *
	 * boot function inits necessary components, such as
	 * adding namespace to the views
	 */
	public function boot() {
		//$this->package('trinity/serviceprovider', 'MandarinProjects\Trinity\CommonAPIs\ServiceProviders', __DIR__);
		//require_once(__DIR__.'/../../../routes.php');
		\View::addNamespace('TrinityCommonViews', __DIR__.'/../Views/');
	}

	public function register()
	{
		// TODO: Implement register() method.
	}
}