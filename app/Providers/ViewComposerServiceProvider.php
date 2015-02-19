<?php namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->composeNavigation();
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

    public function composeNavigation()
    {
        view()->composer('partials.navigation', function ($view) {

            if ($user = Auth::user())
            {
                // Eager loading related User models
                // $user->load('');

            }

            $view->with('user', $user);

        });
    }

}
