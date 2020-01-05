<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Model//Post.php';
require_once __DIR__.'//..//Repository//PostRepository.php';

class PostPageController extends AppController {

    public function show()
    {   
		$category = str_replace("/?page=postPage&", "", $_SERVER['REQUEST_URI']);
		$postRepository = new PostRepository();
		$posts = $postRepository->getPosts($category);
        $this->render('postPage', ['posts' => $posts]);
    }
}