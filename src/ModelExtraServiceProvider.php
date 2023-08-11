<?php

namespace Cesargb\ModelExtra;

use Illuminate\Support\ServiceProvider;

class ModelExtraServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'model_extra');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
              __DIR__.'/../config/config.php' => config_path('model_extra.php'),
            ], 'config');
        }
    }
}
