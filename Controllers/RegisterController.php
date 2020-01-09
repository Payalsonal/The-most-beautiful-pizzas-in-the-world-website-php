<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Repository//Repository.php';

class RegisterController extends AppController {

    public function register()
    {   
		if (!$this->isPost()) {
            unset($_SESSION['userName']);
            unset($_SESSION['password']);
            unset($_SESSION['email']);
            $this->render('register');
        }
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if(empty($email)){
            $this->render('register', ['messages' => ['Błędny adres e-mail!']]);
            return;
        }
        if(ctype_alnum($userName) == false)
        {
            $this->render('register', ['messages' => ['Błędna nazwa użytkownika!']]);
            return;
        }
        if((strlen($userName)<3) || (strlen($userName)>20))
        {
            $this->render('register', ['messages' => ['Nieprawidłowa długość nazwy użytkownika!']]);
            return;
        }
        if((strlen($password)<3) || (strlen($password)>20))
        {
            $this->render('register', ['messages' => ['Nieprawidłowa długość hasła!']]);
            return;
        }
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $userRepository = new UserRepository();
        $userRepository->addUser($userName, $hash_password, $email);
        unset($_SESSION['userName']);
        unset($_SESSION['password']);
        unset($_SESSION['email']);
        $url = "http://$_SERVER[HTTP_HOST]/";
        header("Location: {$url}?page=login");
    }
}