<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Model//User.php';

class SecurityController extends AppController {

    public function login()
    {   
		$user = new User('admin', 'admin');
		if ($this->isPost()) {
            $userName = $_POST['userName'];
            $password = $_POST['password'];

            if ($user->getUserName() !== $userName) {
                return;
            }

            if ($user->getPassword() !== $password) {
                return;
            }

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=homePage");
        }
	
	
        $this->render('login');
    }
}