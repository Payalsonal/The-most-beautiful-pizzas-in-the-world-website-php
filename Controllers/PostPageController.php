<?php

require_once 'AppController.php';

class PostPageController extends AppController {

    public function show()
    {   
		//SELECT post.* FROM post, postcategory WHERE postcategory.category = "thin" and postcategory.id = post.categoryID
		$zmienna = str_replace("/?page=postPage&", "", $_SERVER['REQUEST_URI']);
        //$this->render('postPage', ['messages' => ['User with this userName not exist!']]);
        $this->render('postPage', ['messages' => [$zmienna]]);
    }
}