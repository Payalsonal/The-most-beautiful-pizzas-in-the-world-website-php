<?php

require_once "Repository.php";

class UploadRepository extends Repository {

    public function upload(string $source, string $title, string $description){
        $result_set = $this->database->connect()->prepare("INSERT INTO `upload` 
		(`source`, `title`, `description`) 
		VALUES (:source, :title, :description)");
        $result_set->execute(array(
            ':source' => $source,
            ':title' => $title,
            ':description' => $description
        ));

    }
}