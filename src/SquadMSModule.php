<?php

namespace SquadMS\Rules;

use Illuminate\Support\Facades\Artisan;
use SquadMS\Foundation\Modularity\Contracts\SquadMSModule as SquadMSModuleContract;

class SquadMSModule extends SquadMSModuleContract
{
    public static function getIdentifier(): string
    {
        return 'sqms-rules';
    }

    public static function getName(): string
    {
        return 'SquadMS Rules';
    }

    public static function publishAssets(): void
    {
        Artisan::call('vendor:publish', [
            '--tag'      => self::getIdentifier() . '-assets',
            '--force'    => true,
        ]);
    }
}
