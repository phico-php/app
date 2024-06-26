<?php

return [

    'use' => env('CACHE_USE', 'default'),

    'servers' => [

        'default' => [
            'driver' => env('CACHE_DEFAULT_DRIVER', 'redis'),
            'host' => env('CACHE_DEFAULT_HOST', '127.0.0.1'),
            'port' => env('CACHE_DEFAULT_PORT', 6379),
        ],

    ],
];
