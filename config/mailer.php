<?php

return [

	'use' => env('MAILER_USE', 'file'),

	'to' => [
		'name' => env('MAILER_TO_NAME'),
		'address' => env('MAILER_TO_ADDRESS'),
	],

	'from' => [
		'name' => env('MAILER_FROM_NAME'),
		'address' => env('MAILER_FROM_ADDRESS'),
	],

	'transports' => [

		'file' => [
			'filepath' => env('MAILER_FILE_FILEPATH', sprintf('storage/logs/mail-%s.log', date('Y-m-d'))),
		],

		'mail' => [
			'params' => env('MAILER_MAIL_PARAMS', ''),
		],

		'smtp' => [
			'username' => env('MAILER_SMTP_USERNAME', ''),
			'password' => env('MAILER_SMTP_PASSWORD', ''),
			'host' => env('MAILER_SMTP_HOST', ''),
			'port' => env('MAILER_SMTP_PORT', ''),
			'security' => env('MAILER_SMTP_SECURITY', ''),
		],

	],
];
