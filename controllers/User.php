<?php

namespace controllers;

use \app\classes\Request;

class User extends Controller
{

    private $userId;

    public function __construct()
    {
        $this->userId = Request::otherParameters()[0];

        if (is_numeric($this->userId)) {

        } else {
            $this->loadView('json', [
                'status' => 'error',
                'data' => 'Missing or invalid userId',
                'http_status' => 400
            ]);
        }
    }

    /**
     * Retrieve a user
     */
    public function httpGet()
    {
        $test = new \app\classes\Test();
        $this->loadView(
            'json',
            $test->repeat(Request::otherParameters())
        );
    }

    public function httpPost()
    {

    }

    public function httpPut()
    {

    }

    public function httpDelete()
    {

    }
}
