<?php

/**
 * Add your event handlers here.
 *
 * Built-in events:
 * 'phico.request': Request,              request has been received    (in phico)
 * 'phico.call': Request,                 callable is being handled    (in phico)
 * 'phico.response': Request, Response,   response has been generated  (in phico)
 */

use Phico\Events\Event;

// get the event dispatcher
$events = container()->get(\Phico\Events\Dispatcher::class);

// add event listeners
$events->add('phico.call', function (Event $event) {
    $id = $event->id();
    logger()->debug($event->id(), $event->context());
});

$events->add('phico.request', function ($event) {
    $id = $event->id();
    logger()->info("got event: {$id}");
});
$events->add('phico.response', function ($event) {
    $id = $event->id();
    logger()->info("got event: {$id}");
});
