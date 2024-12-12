<?php

/**
 * Add your app middleware here.
 *
 * These classes will be called on every request
 */

// get the event dispatcher
$router = (new \Phico\Router\Router())->add($routes);

$app->use([
    new \Phico\Middleware\ResponseHandler(),
    new \Phico\Middleware\SecureHeaders(),
    new \Phico\Middleware\TrimInputs(),
    new \Phico\Router\RouteHandler($router),
]);
