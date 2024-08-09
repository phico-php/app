<?php

return [

    'use' => env('CACHE_USE', 'files'),

    'drivers' => [

        'files' => [
            'path' => env('CACHE_FILES_PATH', '/storage/cache'),
            'prefix' => env('CACHE_FILES_PREFIX', ''),
        ],

        'redis' => [
            'scheme' => env('CACHE_REDIS_SCHEME', 'tcp'),
            'host' => env('CACHE_REDIS_HOST', '127.0.0.1'),
            'port' => env('CACHE_REDIS_PORT', 6379),
            'prefix' => env('CACHE_REDIS_PREFIX', ''),
        ],

    ],
];
