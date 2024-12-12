<?php

$routes->get('/', function ($request) {
    return response()->json([
        'status' => 'ok',
        'message' => $request->uri()->path()
    ]);
});
