<?php
/**
 * Define your Phico event handlers here.
 *
 */

// $app->on($code, function($request, $e) {});

// handle all non-http errors
$app->on('error', function ($request, $e) {

    if ($request->isXhr() or $request->accepts('media', 'json')) {
        return response($e->getCode())->json([
            'status' => 'error',
            'message' => 'Sorry an error occured, we will look into it'
        ]);
    }

    // return html
    return response($e->getCode())->html('<h1>Server Error</h1>');

});
