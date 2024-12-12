<?php

// Initialise the runtime environment
// included by public/index.php or the worker setup script

// always show startup errors to avoid a white screen of death
ini_set('display_errors', 1);

// server timezones should ideally be set to UTC
ini_set('date.timezone', 'UTC');

// standardise on UTF-8
ini_set('default_charset', 'UTF-8');
mb_internal_encoding('UTF-8');
mb_regex_encoding('UTF-8');

// set app path root
define('PHICO_PATH_ROOT', dirname(__DIR__));

// require custom functions before the builtin functions are autoloaded
// require __DIR__ . '/src/functions.php';

// use the composer autoloader
require __DIR__ . '/../vendor/autoload.php';
