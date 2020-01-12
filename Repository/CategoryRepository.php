<?php

require_once "Repository.php";

class CategoryRepository extends Repository {


    public function  getCategoryNameFromId($categoryId){
        $result_set = $this->database->connect()->prepare("SELECT category 
            FROM postcategory 
            WHERE id = :categoryId");
        $result_set->execute(array(
            ':categoryId' => $categoryId
        ));
        $result = $result_set->fetch(PDO::FETCH_ASSOC);
        return $result['category'];
    }
}