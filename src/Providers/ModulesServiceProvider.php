<?php

namespace SquadMS\Rules\Providers;

use Illuminate\Support\ServiceProvider;
use SquadMS\Foundation\Facades\SquadMSModuleRegistry;
use SquadMS\Rules\SquadMSModule;

class ModulesServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        SquadMSModuleRegistry::register(SquadMSModule::class);
    }
}
