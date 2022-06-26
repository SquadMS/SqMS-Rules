
<?php

use Illuminate\Support\Facades\Route;
use SquadMS\Foundation\Helpers\SquadMSRouteHelper;
use SquadMS\Rules\Http\Controllers\RulesController;

SquadMSRouteHelper::localized(function () {
    Route::get('rules', [RulesController::class, 'show'])->name('rules');
});
