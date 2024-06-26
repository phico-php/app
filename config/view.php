<?php

return [

    'use' => env('VIEWS_USE', 'blade'),

    'renderers' => [

        'blade' => [
            'views' => env('VIEWS_BLADE_VIEWS_PATH', 'app/views'),
            'cache' => env('VIEWS_BLADE_CACHE_PATH', 'storage/views'),
            'compact' => env('VIEWS_BLADE_COMPACT', false),
            'namespaces' => [

            ],
        ],

    ],

];
