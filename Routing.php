<?php

require_once 'Controllers\SecurityController.php';
require_once 'Controllers\HomePageController.php';
require_once 'Controllers\RegisterController.php';
require_once 'Controllers\ChangePasswordController.php';
require_once 'Controllers\ResetPasswordController.php';

class Routing {
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'login' => ['controller' => 'SecurityController', 'action' => 'login'],
			'logout' => ['controller' => 'SecurityController', 'action' => 'logout'],
            'homePage' => ['controller' => 'HomePageController', 'action' => 'login'],
			'register' => ['controller' => 'RegisterController', 'action' => 'register'],
			'changePassword' => ['controller' => 'ChangePasswordController', 'action' => 'changePassword'],
			'resetPassword' => ['controller' => 'ResetPasswordController', 'action' => 'resetPassword']
			
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