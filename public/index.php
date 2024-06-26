<?php

// boot phico
require '../boot.php';

// create the app
$app = phico();

// process the app support files
include path('app/container.php');
include path('app/events.php');
include path('app/middleware.php');
include path('app/routes.php');

// once everything is configured run the application
$app->run();
