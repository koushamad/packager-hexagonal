<?php

namespace :uc:vendor\:uc:package;

use Illuminate\Support\ServiceProvider;
use :uc:vendor\:uc:package\Application\Services\:uc:packageService;
use :uc:vendor\:uc:package\Application\Services\PingService;
use :uc:vendor\:uc:package\Infra\Console\PingCommand;

/**
 * Class :uc:packageServiceProvider
 * @package :uc:vendor\:uc:package
 */
class :uc:packageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__ . '/Infra/Resources/lang', ':lc:vendor');
        $this->loadViewsFrom(__DIR__ . '/Infra/Resources/views', ':lc:vendor');
        $this->loadMigrationsFrom(__DIR__ . '/Infra/Database/Migrations');
        $this->loadRoutesFrom(__DIR__ . '/Infra/Routes/api.php');
        $this->loadRoutesFrom(__DIR__ . '/Infra/Routes/web.php');

        foreach (:uc:packageAutoWireServiceProvider::boot() as $contract => $class) {
            $this->app->bind($contract, $class);
        }

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/Domain/Config/:lc:package.php', ':lc:package');

        // Register Event Service Provider
        $this->app->register(:uc:packageEventServiceProvider::class);

        // Register the service the package provides.
        $this->app->singleton(':lc:package', function ($app) {
            return new :uc:packageService($app->make(PingService::class));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [':lc:package'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/Domain/Config/:lc:package.php' => config_path(':lc:package.php'),
        ], ':lc:package.config');

        // Publishing the views.
        $this->publishes([
            __DIR__ . '/Infra/Resources/views' => base_path('resources/views/vendor/:lc:vendor'),
        ], ':lc:package.views');

        // Publishing assets.
        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/:lc:vendor'),
        ], ':lc:package.views');

        // Publishing the translation files.
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/:lc:vendor'),
        ], ':lc:package.views');

        // Registering package commands.
        $this->commands([
            PingCommand::class
        ]);
    }
}
