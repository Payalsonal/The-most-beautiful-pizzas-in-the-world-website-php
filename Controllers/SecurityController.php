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
				$this->render('login', ['messages' => ['User with this userName not exist!']]);
                return;
            }

            if ($user->getPassword() !== $password) {
				$this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=resetPassword");
        }
	
	
        $this->render('login');
    }
}