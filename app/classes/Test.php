<?php

namespace app\classes;

/**
 * Test Endpoint
 *
 * Simple endpoint that will return the input value as json
 *
 * @author Ben Taylor-Wilson <ben@ben-taylor.co.uk>
 * @see http://www.ben-taylor.co.uk/LKMVC
 */
class Test
{
    /**
     * Returns supplied data in json format with
     * success message and http response code
     * @param $data string to be repeated
     * @return array suitable for json encoding
     */
    public function repeat($data)
    {
        if (!empty($data)) {
            return [
                'data' => $data[0],
                'status' => 'success',
                'http_status' => 200,
            ];
        } else {
            return [
                'data' => 'no repeat value sent',
                'status' => 'error',
                'http_status' => 400,
            ];
        }
    }
}
