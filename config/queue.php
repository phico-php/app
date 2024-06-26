<?php

return [

	'use' => env('QUEUE_USE', 'default'),

	'servers' => [

		'default' => [
			'driver' => env('QUEUE_DEFAULT_DRIVER', 'beanstalk'),
			'host' => env('QUEUE_DEFAULT_HOST', '127.0.0.1'),
			'port' => env('QUEUE_DEFAULT_PORT', 11300),
		],

	],

];
