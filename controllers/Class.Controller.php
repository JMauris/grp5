<?php

class Controller {
    protected $vars = array();
    protected $controller;
    protected $method;

    /**
     * Constructor
     * @param string $controller
     * @param string $method
     */
    function Controller($controller, $method) {
        $this->controller = $controller;
        $this->method = $method;
    }

    /**
     * Display view associated to a controller method
     */
    function display(){
    	$view = "{$this->controller}/{$this->method}.php";

    	if(file_exists('views/'.$view)){
			include 'views/'.$view;

    }

    }

    /**
     * URL redirection
     * @param string $controller
     * @param string $method
     */
    function redirect($controller, $method) {
    	$url = "Location: " . URL_DIR. $controller . '/' .$method;

    	header($url);
    }

    /**
     * Get active (logged-in) user
     * @return User
     */
    function getActiveUser(){
    	if(isset($_SESSION['personne']))
    		return $_SESSION['personne'];
    	else
    		return false;
    }
}
