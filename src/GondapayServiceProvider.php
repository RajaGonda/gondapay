<?php namespace Rajagonda\Gondapay;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class GondapayServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $gateway = Config::get('gondapay.gateway');
        $this->app->bind('gondapay', 'Rajagonda\Gondapay\Gondapay');

        $this->app->bind('Rajagonda\Gondapay\Gateways\GondapayGatewayInterface','Rajagonda\Gondapay\Gateways\\'.$gateway.'Gateway');
	}


    public function boot(){
        $this->publishes([
            __DIR__.'/config/config.php' => base_path('config/gondapay.php'),
            __DIR__.'/views/middleware.blade.php' => base_path('app/Http/Middleware/VerifyCsrfMiddleware.php'),
        ]);

		$this->loadViewsFrom(__DIR__.'/views', 'gondapay');

    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [

        ];
	}

}
