<?php

require '../app/Bootstrap.php';

$app = new app\Core();
if (!$app->initialise()) {
    \controllers\Controller::loadView('json', [
        'data' => 'endpoint not recognised',
        'status' => 'error',
        'http_status' => 404,
    ]);
}
