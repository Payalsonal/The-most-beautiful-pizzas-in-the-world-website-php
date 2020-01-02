<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Model//User.php';
require_once __DIR__.'//..//Repository//UserRepository.php';

class SecurityController extends AppController {

    public function login()
    {   
		$userRepository = new UserRepository();
		
		$user = new User('admin', "admin@email.com", 'admin');
		if ($this->isPost()) {
            $userName = $_POST['userName'];
            $password = $_POST['password'];
			$user = $userRepository->getUser($userName);
            if (!$user) {
				$this->render('login', ['messages' => ['User with this userName not exist!']]);
                return;
            }

            if ($user->getPassword() !== $password) {
				$this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=homePage");
        }
	
	
        $this->render('login');
    }
}