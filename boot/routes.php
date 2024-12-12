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

// an example showing route and query parameters
$routes->get('/hello/{name}', function ($request) {
    return response()->json([
        'status' => 'ok',
        'message' => sprintf('Hello %s', $request->route()->param('name')),
    ]);
});
// an example catchall route
$routes->get('*', function (Request $request) {
    return response(404)->json([
        'status' => 'not found',
        'path' => $request->uri()->path(),
        'uri' => [
            'params' => $request->uri()->params(),
            'segments' => $request->uri()->segments(),
        ],
        'route' => [
            'params' => $request->route()->params(),
        ],
    ]);
});
