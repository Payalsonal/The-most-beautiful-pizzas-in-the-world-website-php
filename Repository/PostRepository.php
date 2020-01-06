<?php

require_once "Repository.php";
require_once __DIR__.'//..//Model//Post.php';

class PostRepository extends Repository {

    public function getPosts(string $category): array {
        $result = [];
        $stmt = $this->database->connect()->prepare("
			SELECT post.* 
			FROM post, postcategory 
			WHERE postcategory.category = '$category' and postcategory.id = post.categoryID 
        ");
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
}