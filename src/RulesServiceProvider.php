<?php

namespace SquadMS\Rules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use SquadMS\Foundation\Contracts\SquadMSModuleServiceProvider;
use Spatie\LaravelPackageTools\Package;
use SquadMS\Foundation\Facades\SquadMSPermissions;
use SquadMS\Rules\Filament\Resources\RuleArticleResource;

class RulesServiceProvider extends SquadMSModuleServiceProvider
{
    public static string $name = 'sqms-rules';

    protected array $resources = [
        RuleArticleResource::class,
    ];

    public function configureModule(Package $package): void
    {
        $package->hasAssets()
            ->hasRoutes(['api', 'web']);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function bootedModule(): void
    {
        /* Permissions */
        foreach (Config::get('sqms-rules.permissions.definitions', []) as $definition => $displayName) {
            SquadMSPermissions::define(Config::get('sqms-rules.permissions.module'), $definition, $displayName);
        }
    }
}
