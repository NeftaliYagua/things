<?php

namespace LaravelSchema\Things;

use Illuminate\Support\ServiceProvider;

class ThingsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/things.php' => config_path('things.php'),
        ]);
    }
    public function register()
    {
        
    }
}