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
		\View::addNamespace('TrinityCommonViews', __DIR__.'/../Views/');
        \View::addNamespace('TrinityStudentsViews', __DIR__.'/../../Students/Views/');
        //\View::addNamespace('TrinityAdminsViews', __DIR__.'/../../Students/Views/');
        //\View::addNamespace('TrinityInstructorsViews', __DIR__.'/../../Students/Views/');
        //\View::addNamespace('TrinityHRsViews', __DIR__.'/../../Students/Views/');
        //\View::addNamespace('TrinityConsultantsViews', __DIR__.'/../../Students/Views/');
        //\View::addNamespace('TrinitySecretariesViews', __DIR__.'/../../Students/Views/');
        //\View::addNamespace('TrinityExecutivesViews', __DIR__.'/../../Students/Views/');
	}

	public function register()
	{
		// TODO : Implement register() method.
	}
}