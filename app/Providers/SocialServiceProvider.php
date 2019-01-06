<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Facebook;
class SocialServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Facebook::class, function(){

            return new Facebook('Facebook Api-Key');
        });
    }
}
