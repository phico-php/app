<?php

/**
 * Define the app dependencies here.
 *
 */

$container = container();

// the event dispatcher
$container->set(\Phico\Events\Dispatcher::class, function (): \Phico\Events\Dispatcher {
    return new \Phico\Events\Dispatcher();
})->alias('EventDispatcher')->share(true);

return $container;
