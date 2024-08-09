<?php

return [

	'use' => env('QUEUE_USE', 'beanstalk'),

	'servers' => [

		'beanstalk' => [
			'driver' => env('QUEUE_DEFAULT_DRIVER', 'beanstalk'),
			'host' => env('QUEUE_DEFAULT_HOST', '127.0.0.1'),
			'port' => env('QUEUE_DEFAULT_PORT', 11300),
		],

		'redis' => [
			'driver' => env('QUEUE_REDIS_DRIVER', 'redis'),
			'scheme' => env('QUEUE_REDIS_SCHEME', 'tcp'),
			'host' => env('QUEUE_REDIS_HOST', '127.0.0.1'),
			'port' => env('QUEUE_REDIS_PORT', 6379),
		]

	],

];
