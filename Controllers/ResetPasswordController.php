<?php

require_once 'AppController.php';

class ResetPasswordController extends AppController {

    public function resetPassword()
    {   
        $this->render('resetPassword');
    }
}