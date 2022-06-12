<?php

namespace SquadMS\Rules;

use Illuminate\Support\ServiceProvider;

class RulesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Configuration */
        $this->mergeConfigFrom(__DIR__.'/../config/sqms-rules.php', 'sqms-rules');
        
        /* Load Migrations */
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
