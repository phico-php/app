<?php

// the default welcome route
$routes->get('/', function ($request) {
    return response()->json([
        'status' => 'ok',
        'message' => 'Welcome to Phico'
    ]);
});
