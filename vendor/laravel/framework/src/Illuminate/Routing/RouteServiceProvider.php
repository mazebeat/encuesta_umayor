<?php namespace Illuminate\Routing;

use Closure;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->before();

		if ($this->app->routesAreCached())
		{
			$this->app->booted(function()
			{
				require $this->app->getRouteCachePath();
			});
		}
		else
		{
			$this->map();
		}
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {}

	/**
	 * Called before routes are registered.
	 *
	 * Register any model bindings or pattern based filters.
	 *
	 * @return void
	 */
	public function before() {}

	/**
	 * Define the routes for the application.
	 *
	 * @return void
	 */
	public function map() {}

	/**
	 * Register the given Closure with the "group" function namespace set.
	 *
	 * @param  \Closure  $callback
	 * @return void
	 */
	protected function namespaced(Closure $callback)
	{
		$namespace = trim($this->app['config']['namespaces.controllers'], '\\');

		if (empty($namespace))
		{
			$callback($this->app['router']);
		}
		else
		{
			$this->app['router']->group(compact('namespace'), $callback);
		}
	}

	/**
	 * Pass dynamic methods onto the router instance.
	 *
	 * @param  string  $method
	 * @param  array  $parameters
	 * @return mixed
	 */
	public function __call($method, $parameters)
	{
		return call_user_func_array([$this->app['router'], $method], $parameters);
	}

}
