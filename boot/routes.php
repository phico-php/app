<?php

/**
 * Add your app routes here.
 *
 * Add the routes using the route collector $routes
 * or include additional routes files for your modules.
 */

use Phico\Http\Request;

// get the route collector
$routes = routes();

include path('app/Welcome/routes.php');

$routes->get('*', function (Request $request) {
    return response(404)->json([
        'status' => 'not found',
        'message' => $request->uri()->path()
    ]);
});
