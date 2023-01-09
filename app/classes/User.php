<?php

namespace app\classes;

class User 
{
    private $model;

    public function __construct($user_id)
    {
        // get the model here
    }

    public function __get($name)
    {
        return $model->name;
    }
}