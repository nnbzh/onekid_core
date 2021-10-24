<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(config('app.env') === 'production' || config('app.env') === 'staging' || config('app.env') === 'release') {
            $this->app['request']->server->set('HTTPS', true);
            \URL::forceScheme('https');
        }
    }
}
