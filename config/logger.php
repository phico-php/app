<?php

return [

    'level' => env('LOGGER_LEVEL', 'debug'),
    'filepath' => env('LOGGER_FILEPATH', sprintf('storage/logs/app-%s.log', date('Y-m-d'))),

];
