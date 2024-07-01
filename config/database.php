<?php

return [

    'use' => env('DATABASE_USE', 'default'),

    'connections' => [

        'default' => [
            'driver' => env('DATABASE_DEFAULT_DRIVER', 'sqlite'),
            'database' => env('DATABASE_DEFAULT_DATABASE', 'storage/database/default.sqlite'),
            'host' => env('DATABASE_DEFAULT_HOST', ''),
            'port' => env('DATABASE_DEFAULT_PORT', ''),
            'username' => env('DATABASE_DEFAULT_USERNAME', ''),
            'password' => env('DATABASE_DEFAULT_PASSWORD', ''),
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        ]

    ],

    'migrations' => [
        'table' => env('DATABASE_MIGRATIONS_TABLE', '_migrations'),
        'path' => env('DATABASE_MIGRATIONS_PATH', 'storage/database/migrations'),
        'connection' => env('DATABASE_MIGRATIONS_CONNECTION', env('DATABASE_USE', 'default')),
    ],

    'seeds' => [
        'path' => env('DATABASE_SEEDS_PATH', 'storage/database/seeds'),
        'connection' => env('DATABASE_SEEDS_CONNECTION', env('DATABASE_USE', 'default')),
    ],

];
