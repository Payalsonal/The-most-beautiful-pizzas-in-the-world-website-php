<?php

require_once "Repository.php";
require_once "CategoryRepository.php";
require_once __DIR__.'//..//Model//Post.php';

class PostRepository extends Repository {

    public function getPosts(string $category, int $page): array {
        $result = [];
		if($page === 0){
			$photoIndex = 0;
		}
		else{
			$photoIndex = ($page * 4);
		}
        $stmt = $this->database->connect()->prepare("
			SELECT post.* 
			FROM post, postcategory 
			WHERE postcategory.category = '$category' and postcategory.id = post.categoryID 
			ORDER BY post.id LIMIT ".$photoIndex.", 4");
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($posts as $post) {
            $result[] = new Post(
				"$category",
				$post['source'],
				$post['title'],
				$post['description'],
				$post['likes'],
				$post['dislikes'],
				$post['id']
            );
        }

        return $result;
    }
    public function  createPost($categoryId, $source, $title, $description){
        $result_set = $this->database->connect()->prepare("INSERT INTO `post`
         (`categoryID`, `source`, `title`, `description`, `likes`, `dislikes`)
          VALUES ((:categoryId), (:source), (:title), (:description), '0', '0')");
        $result_set->execute(array(
            ':categoryId' => $categoryId,
            ':source' => $source,
            ':title' => $title,
            ':description' => $description,
        ));
        $categoryRepository = new CategoryRepository();
        $category = $categoryRepository->getCategoryNameFromId($categoryId);
        $photoDestination = 'Public/img/'.$category.'/'.$source;
        $photoPath = 'Uploads/'.$source;
        if(copy($photoPath, $photoDestination)){
            $delete[] = $photoPath;
        }
    }
}