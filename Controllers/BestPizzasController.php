<?php

require_once 'AppController.php';

class BestPizzasController extends AppController {

    public function show()
    {   
        $this->render('bestPizzas');
    }
}