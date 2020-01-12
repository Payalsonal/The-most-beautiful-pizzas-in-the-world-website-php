<?php

require_once "Repository.php";
require_once __DIR__.'//..//Model//UploadedPost.php';

class UploadRepository extends Repository {

    public function upload(string $source, string $title, string $description){
        $result_set = $this->database->connect()->prepare("INSERT INTO `upload` 
		(`source`, `title`, `description`, `userId`) 
		VALUES (:source, :title, :description, :userId)");
        $result_set->execute(array(
            ':source' => $source,
            ':title' => $title,
            ':description' => $description,
            ':userId' => $_SESSION['id']
        ));
    }
    public function getPosts(int $page): array {
        $result = [];
        if($page === 0){
            $photoIndex = 0;
        }
        else{
            $photoIndex = ($page * 4);
        }
        $stmt = $this->database->connect()->prepare("
			SELECT upload.* 
			FROM upload 
			ORDER BY upload.id LIMIT ".$photoIndex.", 4");
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($posts as $post) {
            $result[] = new UploadedPost(
                $post['source'],
                $post['title'],
                $post['description'],
                $post['userId'],
                $post['id']
            );
        }
        return $result;
    }
    public function deletePost(string $postId){
        $delete = $this->database->connect()->prepare("DELETE FROM upload WHERE upload.id = :id ");
        $delete->execute(array(
            ':id' => $postId
        ));
    }
}