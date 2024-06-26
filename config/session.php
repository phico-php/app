<?php

return [
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
