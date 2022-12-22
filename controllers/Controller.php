<?php

/**
 * Base controller class
 *
 * all of your controllers should extend this class
 *
 * @author Ben Taylor-Wilson <ben@ben-taylor.co.uk>
 * @see http://www.ben-taylor.co.uk/LKMVC
 */
class Controller
{
    protected $view;
    protected $endpoint;
    protected $model;

    /**
     * Instantiates associated endpoint
     * Endpoint class must be the same name with 'Endpoint' as suffix
     */
    public function __construct()
    {
        $this->loadEndpoint(get_called_class());
    }

    /*
     * instantiate a model
     * @param $model_name - we will append the 'Model' suffix
     */
    public function loadEndpoint($endpoint_name)
    {
        $endpoint_name .= 'Endpoint';
        $this->endpoint = new $endpoint_name();
    }

    /**
     * Static method to include a view
     * @param $view_name name of the view without extension
     * @param $data array
     * @return bool
     */
    public static function loadView($view_name, $data)
    {
        $view_path = DIR_VIEW . ltrim($view_name, '/') . '.php';
        if (file_exists($view_path)) {
            include($view_path);
            return true;
        } else {
            return false;
        }
    }

    /*
     * instantiate a model
     * @param $model_name - we will append the 'Model' suffix
     */
    public function loadModel($model_name)
    {
        $model_name .= 'Model';
        $this->model = new $model_name();
    }
}