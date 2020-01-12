<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Model//Post.php';
require_once __DIR__.'//..//Repository//UploadRepository.php';
require_once __DIR__.'//..//Repository//PostRepository.php';

class ApprovePostController extends AppController {

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
			}
            if($_SESSION['page'] < 0) {
                $_SESSION['page'] = 0;
            }
            $uploadRepository = new UploadRepository();
            if(isset($_POST['confirm'])){
                $title = $_POST['title'];
                $description = $_POST['description'];
                $category = $_POST['category'];
                $postSource = $_POST['postSource'];
                $postRepository = new PostRepository();
                $postRepository->createPost($category, $postSource, $title, $description);
                $postId = $_POST['postId'];
                $uploadRepository->deletePost($postId, $postSource);
            }
            if(isset($_POST['denny'])){
                $postId = $_POST['postId'];
                $postSource = $_POST['postSource'];
                $uploadRepository->deletePost($postId, $postSource);
            }
        }
        $uploadRepository = new UploadRepository();
		$posts = $uploadRepository->getPosts($_SESSION['page']);
        $this->render('approvePost', ['posts' => $posts]);
		return;
    }

}