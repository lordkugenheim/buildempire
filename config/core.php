<?php

// Directory constants
define('DIR_ROOT', dirname(__DIR__, 1) . '/');
define('DIR_APP', DIR_ROOT);
define('DIR_CONFIG', DIR_ROOT . 'config/');
define('DIR_CONTROL', DIR_ROOT . 'controllers/');
define('DIR_ENDPOINT', DIR_ROOT . 'endpoints/');
define('DIR_CLASS', DIR_ROOT . 'classes/');
define('DIR_MODEL', DIR_ROOT . 'models/');
define('DIR_VIEW', DIR_ROOT . 'views/');

// Defines if the api should use the second url parameter as a method
define('SECOND_PARAM_METHOD', false);
