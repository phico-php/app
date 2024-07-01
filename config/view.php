<?php

return [

    'use' => env('VIEWS_USE', 'pop'),

    'renderers' => [

        'latte' => [
            'cache_path' => env('VIEWS_CACHE_PATH', 'storage/views'),
            'view_paths' => env('VIEWS_VIEWS_PATH', 'app/Views'),
            'namespaces' => [

            ],
        ],

        'pop' => [
            'cache_path' => env('VIEWS_CACHE_PATH', 'storage/views'),
            'view_paths' => env('VIEWS_VIEWS_PATH', 'app/Views'),
            'namespaces' => [],
        ],

        'plates' => [
            'file_extension' => env('VIEWS_FILE_EXTENSION', 'plates.php'),
            'default_path' => env('VIEWS_DEFAULT_PATH', 'app/Views'),
            'folders' => [],
            'functions' => [],
            'extensions' => [],
        ],

        'rapier' => [
            'cache_path' => env('VIEWS_CACHE_PATH', 'storage/views'),
            'view_paths' => env('VIEWS_VIEWS_PATH', 'app/Views'),
            'namespaces' => [

            ],
        ],

        'twig' => [
            'cache_path' => env('VIEWS_CACHE_PATH', 'storage/views'),
            'view_paths' => env('VIEWS_VIEWS_PATH', 'app/Views'),
            'namespaces' => [

            ],
        ],

    ],

];
