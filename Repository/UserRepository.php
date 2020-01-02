<?php

require_once "Repository.php";
require_once __DIR__.'//..//Model//User.php';

class UserRepository extends Repository {

    public function getUser(string $userName): ?User 
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE userName = :userName
        ');
        $stmt->bindParam(':userName', $userName, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            return null;
        }

        return new User(
			$user['password'],
			$user['email'],
			$user['userName']
        );
    }

    public function getUsers(): array {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users
        ');
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            $result[] = new User(
				$user['password'],
				$user['email'],
				$user['userName'],
				$user['id']
            );
        }

        return $result;
    }
	
	public function addUser(string $userName, string $password, string $email){
		$result_set = $this->database->connect()->prepare("INSERT INTO `users` (`username`, `password`, `email`) VALUES (:username, :password, :email)");
		$result_set->execute(array(
			':username' => $userName,
			':password' => $password,
			':email' => $email
		));
		
	}
}