<?php

require_once 'AppController.php';

class changePasswordController extends AppController {

    public function changePassword()
    {   
        $this->render('changePassword');
    }
}