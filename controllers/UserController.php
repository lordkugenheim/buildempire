<?php

namespace controllers;

use \app\classes\User;
use \app\classes\Request;
use \models\UserModel;

class UserController extends Controller
{
    private $userId;
    private $User;
    private $Model;

    public function __construct()
    {
        if (!$this->loadUserId()) {
            $this->loadView('json', [
                'status' => 'error',
                'data' => 'Missing or invalid userId',
                'http_status' => 400
            ]);
        }

        $this->User = new User();

        $this->Model = new UserModel();
    }

    /**
     * Retrieve a user
     */
    public function httpGet()
    {
        $user_data = $this->Model
            ->where('id', $this->userId)
            ->get()
            ->toArray();
        
        $this->loadView('json', [
            'status' => 'success',
            'data' => $user_data
        ]);
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
