<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Model//User.php';
require_once __DIR__.'//..//Repository//UserRepository.php';

class SecurityController extends AppController {

    public function login()
    {   
		$userRepository = new UserRepository();
		
		if ($this->isPost()) {
            $userName = $_POST['userName'];
            $password = $_POST['password'];
			$hash_password = password_hash($password, PASSWORD_DEFAULT);
			$user = $userRepository->getUser($userName);
            if (!$user) {
				$this->render('login', ['messages' => ['User with this userName not exist!']]);
                return;
            }
            if (!password_verify($password, $user->getPassword())) {
				$this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }
			$_SESSION["id"] = $user->getID();
            $_SESSION["role"] = $user->getRole();
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=homePage");
        }
	
	
        $this->render('login');
    }
	
	public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('login', ['messages' => ['You have been successfully logged out!']]);
    }
}