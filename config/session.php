<?php

return [

    'cookie' => [
        'name' => 'ssn',
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

    'csrf' => [
        'token_name' => '_csrf_token',
    ],

    'tokens' => [
        'signup' => [
            'ttl' => (1 * 3600)     // 1 hour
        ],
        'reset' => [
            'ttl' => (24 * 3600)    // 24 hours
        ],
        'session' => [
            'ttl' => (12 * 3600)    // 12 hours
        ],
    ],
];
