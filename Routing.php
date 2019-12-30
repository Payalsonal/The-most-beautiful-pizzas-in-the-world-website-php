<?php

require_once 'Controllers\SecurityController.php';
require_once 'Controllers\HomePageController.php';
require_once 'Controllers\RegisterController.php';

class Routing {
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'login' => ['controller' => 'SecurityController', 'action' => 'login'],
            'homePage' => ['controller' => 'HomePageController', 'action' => 'login'],
			'register' => ['controller' => 'RegisterController', 'action' => 'register']
			
        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}