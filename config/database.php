<?php

return [

    'use' => env('DATABASE_USE', 'default'),

    'connections' => [

        'default' => [
            'dsn' => env('DATABASE_DEFAULT_DSN', sprintf('sqlite:%s', path('storage/database.sqlite'))),
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
