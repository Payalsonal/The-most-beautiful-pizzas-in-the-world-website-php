<?php

require_once 'AppController.php';

class HomePageController extends AppController {

    public function login()
    {   
        $this->render('homePage');
    }
}