<?php

namespace controllers;

use \app\classes\User;
use \app\classes\Request;
use \models\UserModel;

class UserController extends Controller
{
    private $User;
    private $Model;

    public function __construct()
    {
        $this->User = new User();

        $this->Model = new UserModel();
    }

    /**
     * Retrieve a user
     */
    public function httpGet()
    {
        $userId = $this->getUserIdOrDie();

        $user_data = $this->Model
            ->where('id', $userId)
            ->get()
            ->toArray();
        
        $this->loadView('json', [
            'status' => 'success',
            'data' => $user_data
        ]);
    }

    public function httpPost()
    {
        $userId = $this->getUserIdOrDie();

    }

    public function httpPut()
    {

    }

    public function httpDelete()
    {
        $userId = $this->getUserIdOrDie();

        $user_data = $this->Model
        ->where('id', $userId)
        ->get();

        $user_data->delete();
    
        $this->loadView('json', [
            'status' => 'success',
            'data' => 'User ' . $userId . ' was deleted'
        ]);
        
    }

    public function getUserIdOrDie()
    {
        $userId = Request::otherParameters()[0];

        if (is_numeric($userId)) {
            return $userId;
        } else {
            $this->loadView('json', [
                'status' => 'error',
                'data' => 'Missing or invalid userId',
                'http_status' => 400
            ]);
        }
    }
}
