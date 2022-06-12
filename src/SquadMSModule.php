<?php

namespace SquadMS\Rules;

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
}
