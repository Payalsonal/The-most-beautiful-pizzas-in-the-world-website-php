<?php

require_once 'Controllers\SecurityController.php';
require_once 'Controllers\PostPageController.php';
require_once 'Controllers\RegisterController.php';
require_once 'Controllers\ChangePasswordController.php';
require_once 'Controllers\ResetPasswordController.php';
require_once 'Controllers\UploadController.php';
require_once 'Controllers\ApprovePostController.php';

class Routing {
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'login' => ['controller' => 'SecurityController', 'action' => 'login'],
			'logout' => ['controller' => 'SecurityController', 'action' => 'logout'],
            'postPage' => ['controller' => 'PostPageController', 'action' => 'show'],
			'register' => ['controller' => 'RegisterController', 'action' => 'register'],
			'changePassword' => ['controller' => 'ChangePasswordController', 'action' => 'changePassword'],
			'resetPassword' => ['controller' => 'ResetPasswordController', 'action' => 'resetPassword'],
			'upload' => ['controller' => 'UploadController', 'action' => 'upload'],
			'approvePost' => ['controller' => 'ApprovePostController', 'action' => 'show'],
			'availabilityName' => ['controller' => 'RegisterController', 'action' => 'checkAvailability']
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