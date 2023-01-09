<?php

namespace app\classes;

class User extends Controller
{
    /**
     * Get Endpoint
     */
    public function httpGet()
    {
        $request_data = Request::otherParameters();
        $data = $this->endpoint->httpGet($request_data);
        Controller::loadView('json', $data);
    }
}
