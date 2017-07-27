<?php namespace Waimao\AmazonMws;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

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
        $configPath = __DIR__ . '/config/amazon-mws.php';
        $this->mergeConfigFrom($configPath, 'amazon-mws');

        $this->app->alias('AmazonOrderList', 'Waimao\AmazonMws\AmazonOrderList');
        $this->app->alias('AmazonOrderItemList', 'Waimao\AmazonMws\AmazonOrderItemList');
    }

    public function boot()
    {
        $configPath = __DIR__ . '/../../config/amazon-mws.php';
        $this->publishes([$configPath => config_path('amazon-mws.php')], 'config');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
