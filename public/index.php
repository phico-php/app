<?php

if (isset($_GET['profile'])) {
    ini_set('xdebug.profiler_enable', '1');
}

// get phico app instance
$app = require '../boot/phico.php';

// handle the request
$app->run();
