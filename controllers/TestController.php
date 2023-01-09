<?php

namespace controllers;

use \app\classes\Request;
use \app\classes\Test;

/**
 * Test Controller
 *
 * Simple endpoint that will return the input value as json
 *
 * @author Ben Taylor-Wilson <ben@ben-taylor.co.uk>
 * @see http://www.ben-taylor.co.uk/LKMVC
 */
class TestController extends Controller
{
    /**
     * Get Endpoint
     * for example:'http://www.ben.taylor.co.uk/test/'
     */
    public function httpGet()
    {
        $test = new Test();
        $this->loadView(
            'json',
            $test->repeat(Request::otherParameters())
        );
    }
}
