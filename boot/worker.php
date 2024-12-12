<?php

use Workerman\Worker;
use Workerman\Connection\TcpConnection;
use Workerman\Protocols\Http\{Request, Response};

// get phico app instance
$app = require 'phico.php';

// create a new worker
$worker = new Worker(
    config()->get("worker.$subdomain.listen"),
    config()->get("worker.$subdomain.context")
);
$worker->name = $subdomain;
// set number of worker processes (should match number of CPUs * blocking factor 1-8) use (1-2 workers for xdebug)
$worker->count = config()->get("worker.$subdomain.workers", 1);

// handle incoming requests
$worker->onMessage = function (TcpConnection $conn, Request $request) use ($app) {
    try {
        $response = $app->handle(
            new \Phico\Http\Request(
                $request->method(),
                $request->host() . $request->uri(),
                $request->header(),
                $request->post(),
                $request->file(),
                [],
                $request->protocolVersion()
            )
        );

        $conn->send(
            new Response(
                $response->status(),
                $response->headers->all(),
                $response->body()
            )
        );
    } catch (\Throwable $th) {
        $msg = sprintf('Error: %s in %s line %d', $th->getMessage(), $th->getFile(), $th->getLine());

        logger()->error($msg);

        // echo "$msg\n";

        // @TODO replace this with something better? If we're erroring here its outside Phico & App
        $conn->send(
            new Response(
                500,
                [],
                sprintf('<h1>Server error</h1><p>%s</p>', $msg)
            )
        );
    }
};

Worker::runAll();
