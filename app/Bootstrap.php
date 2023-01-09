<?php

require "../vendor/autoload.php";

// load any php file inside the /config folder
foreach (scandir('../config') as $filename) {
    if (strpos($filename, 'php') !== false) {
        require_once '../config/' . $filename;
    }
}

$dotenv = Dotenv\Dotenv::createImmutable(DIR_ROOT);
$dotenv->load();

$capsule = new Illuminate\Database\Capsule\Manager;

$capsule->addConnection([
   "driver"   => env('DB_DRIVER'),
   "host"     => env('DB_HOST'),
   "database" => env('DB_DATABASE'),
   "username" => env('DB_USERNAME'),
   "password" => env('DB_PASSWORD')
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();

// Autoloader for core App, Controller and Model classes
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    foreach ([DIR_APP, DIR_CONTROL, DIR_ENDPOINT, DIR_CLASS, DIR_MODEL] as $folder) {
        if (file_exists($folder . $class . '.php')) {
            require_once $folder . $class . '.php';
        }
    }
});
