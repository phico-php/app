<?php
/**
 * Add your app middleware here.
 *
 * These classes will be called on every request
 */

$app->use([
    new \Phico\Middleware\SecureHeaders,
    new \Phico\Middleware\TrimInputs,
]);
