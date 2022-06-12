<?php

namespace SquadMS\Rules\Providers;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use SquadMS\Rules\Filament\Resources\RuleArticleResource;

class FilamentServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        RuleArticleResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('sqms-rules');
    }
}
