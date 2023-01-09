<?php

require '../app/Bootstrap.php';

$app = new app\Core();
if (!$app->initialise()) {
    Controller::loadView('json', [
        'data' => 'endpoint not recognised',
        'status' => 'error',
        'http_status' => 404,
    ]);
}
