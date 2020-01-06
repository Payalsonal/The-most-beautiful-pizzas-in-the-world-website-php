<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Model//Post.php';
require_once __DIR__.'//..//Repository//PostRepository.php';

class PostPageController extends AppController {

    public function show()
    {   
		if(!isset($_SESSION['page'])){
				$_SESSION['page'] = 0;
			}
		if ($this->isPost()) {
			if(isset($_POST['next'])){
				unset($_POST['next']);
				$_SESSION['page'] = $_SESSION['page'] + 1;
			}
			if(isset($_POST['previous'])){
				unset($_POST['previous']);
				$_SESSION['page'] = $_SESSION['page'] -1;
				if($_SESSION['page'] < 0){
					$_SESSION['page'] = 0;
				}
			}
        }
		$category = str_replace("/?page=postPage&", "", $_SERVER['REQUEST_URI']);
		if(isset($_SESSION['category'])){
			if($_SESSION['category'] != $category){
				$_SESSION['category'] = $category;
				$_SESSION['page'] = 0;
			}
		}
		else{
			$_SESSION['category'] = $category;
		}
		$postRepository = new PostRepository();
		$posts = $postRepository->getPosts($category, $_SESSION['page']);
        $this->render('postPage', ['posts' => $posts]);
		return;
    }
}