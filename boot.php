<?php

// always show startup errors to avoid a white screen of death
ini_set('display_errors', 1);

// server timezones should ideally be set to UTC
ini_set('date.timezone', 'UTC');

// standardise on UTF-8
ini_set('default_charset', 'UTF-8');
mb_internal_encoding("UTF-8");
mb_regex_encoding("UTF-8");

// require custom functions before the builtin functions are autoloaded
require 'app/functions.php';

// use the composer autoloader
require '../vendor/autoload.php';

