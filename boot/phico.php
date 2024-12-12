<?php

// // set the domain and folder
// $folder = basename(dirname(__DIR__));
// $domain = strtolower($folder);

// init environment
require __DIR__ . '/init.php';

// create the app
$app = phico();

// process the app support files
include path('boot/container.php');
include path('boot/events.php');
include path('boot/routes.php');
include path('boot/middleware.php');

return $app;
