<?php

return [

    'jwt' => [
        'key' => env('APP_KEY', 't0p-s3cr3t'),
        'algorithm' => env('JWT_ALGORITHM', 'HS384'),
    ],

    'limiter' => [
        'cutoff' => env('SECURITY_RATE_LIMITER_REQUESTS', 100),
        'interval' => env('SECURITY_RATE_LIMITER_INTERVAL', 60)
    ],

    'routes' => [
        'allowed' => [
            'default' => ['GET', 'HEAD'],
            'sessions.signin' => ['POST'],
            'sessions.signout' => ['DELETE'],
            'user.signup' => ['POST'],
            'user.create' => ['POST'],
            'user.email.replace' => ['PUT'],
            'user.password.reset' => ['POST'],
            'user.password.replace' => ['PUT'],
        ],
    ],

    'sign-in' => [
        'max_attempts' => 9,
    ],

    'tokens' => [
        'csrf' => [
            'name' => '__csrf_token',
        ],
        'reset' => [
            'ttl' => (24 * 3600)    // 24 hours
        ],
        'signup' => [
            'ttl' => (1 * 3600)     // 1 hour
        ],
    ],

];
