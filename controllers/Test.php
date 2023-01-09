<?php

namespace controllers;

use \app\classes\Request;

/**
 * Test Controller
 *
 * Simple endpoint that will return the input value as json
 *
 * @author Ben Taylor-Wilson <ben@ben-taylor.co.uk>
 * @see http://www.ben-taylor.co.uk/LKMVC
 */
class Test extends Controller
{
    /**
     * Get Endpoint
     * for example:'http://www.ben.taylor.co.uk/test/'
     */
    public function httpGet()
    {
        $test = new \app\classes\Test();
        $this->loadView(
            'json',
            $test->repeat(Request::otherParameters())
        );
    }
}
