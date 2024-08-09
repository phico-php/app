<?php

return [

    'use' => env('SESSION_USE', 'files'),

    'ttl' => 12 * 3600,

    'cookie' => [

        'name' => env('SESSION_COOKIE_NAME', 'ses'),

        'options' => [
            'expires' => 0,
            'path' => '/',
            'domain' => '',
            'secure' => false,
            'httponly' => true,
            'samesite' => 'Lax',
            'prefix' => '',
            'encode' => false,
        ],

    ],

    'stores' => [

        'files' => [
            'path' => env('SESSION_FILES_PATH', 'storage/sessions'),
            'prefix' => env('SESSION_FILES_PREFIX', 'session.'),
        ],

        'redis' => [
            'scheme' => env('SESSION_REDIS_SCHEME', 'tcp'),
            'host' => env('SESSION_REDIS_HOST', '127.0.0.1'),
            'port' => env('SESSION_REDIS_PORT', 6379),
            'prefix' => env('SESSION_REDIS_PREFIX', 'session.'),
        ],

    ],

];
