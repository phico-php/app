<?php

return [
    'admin' => [
        'workers' => 2,
        'listen' => '0.0.0.0:49140',
        'context' => [
            // 'ssl' => [
            //     'local_cert' => '/etc/nginx/conf.d/ssl/server.pem',
            //     'local_pk' => '/etc/nginx/conf.d/ssl/server.key',
            //     'verify_peer' => false,
            //     'allow_self_signed' => true,
            // ]
        ]
    ],

    'api' => [
        'workers' => 8,
        'listen' => '0.0.0.0:49130',
        'context' => [
            // 'ssl' => [
            //     'local_cert' => '/etc/nginx/conf.d/ssl/server.pem',
            //     'local_pk' => '/etc/nginx/conf.d/ssl/server.key',
            //     'verify_peer' => false,
            //     'allow_self_signed' => true,
            // ]
        ],
    ],
];
