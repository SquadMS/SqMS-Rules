<?php

return [
    'routes' => [
        'prefix'     => null,
        'middleware' => ['web'],
        'def'        => [
            'rules' => [
                'type'        => 'get',
                'name'        => 'rules',
                'path'        => '/rules',
                'middlewares' => [],
                'controller'  => \SquadMS\Rules\Http\Controllers\RulesController::class,
                'executor'    => 'show',
                'localized'   => true,
            ],
        ],
    ],
    'permissions' => [
        'module' => 'sqms-rules',
        'definitions' => [
            'admin rules' => 'Grant access to the Rules management',
        ],
    ],
];
