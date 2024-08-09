<?php
/**
 * Add your app routes here.
 *
 * Add the routes using $app or require
 * additional routes files for your modules.
 */

$app->get('*', function ($request) {

    return response()->json([
        'status' => 'ok',
        'message' => $request->uri->path
    ]);

});
