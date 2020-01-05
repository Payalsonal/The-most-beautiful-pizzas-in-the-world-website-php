<?php

require_once 'AppController.php';

class PostPageController extends AppController {

    public function show()
    {   
        $this->render('postPage');
    }
}