<?php

require_once 'AppController.php';

class HomePageController extends AppController {

    public function show()
    {   
        $this->render('homePage');
    }
}