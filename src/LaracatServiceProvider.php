<?php

namespace Andrisan\Laracat;

use Illuminate\Support\ServiceProvider;

class LaracatServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton(Laracat::class, function () {
            return new Laracat();
        });
    }
}
