<?php

require_once 'AppController.php';

class ChangePasswordController extends AppController {

    public function changePassword()
    {   
    if (!$this->isPost()) {
        unset($_POST['password1']);
        unset($_POST['password2']);
        $this->render('changePassword');
        return;
    }
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        if(!($password1 === $password2)){
            $this->render('changePassword', ['messages' => ['passwords are not the same!']]);
            return;
        }
        $hash_password = password_hash($password1, PASSWORD_DEFAULT);
        $userRepository = new UserRepository();
        $userRepository->changeUserPassword($hash_password, $_SESSION["id"]);
        unset($_POST['password1']);
        unset($_POST['password2']);
        $url = "http://$_SERVER[HTTP_HOST]/";
        header("Location: {$url}?page=login");
    }
}