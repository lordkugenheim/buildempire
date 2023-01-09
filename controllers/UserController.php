<?php

namespace controllers;

use \app\classes\Request;
use \models\UserModel;

class UserController extends Controller
{
    private $userId;
    private $User;
    private $Model;

    public function __construct()
    {
        $this->User = new \app\classes\User();

        if (!$this->loadUserId()) {
            $this->loadView('json', [
                'status' => 'error',
                'data' => 'Missing or invalid userId',
                'http_status' => 400
            ]);
        }

        $this->Model = new UserModel();
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

    public function loadUserId()
    {
        $userId = Request::otherParameters()[0];

        if (is_numeric($userId)) {
            $this->userId = $userId;
            return true;
        }
        return false;
    }
}
