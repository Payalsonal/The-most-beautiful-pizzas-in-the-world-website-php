<?php

require_once 'User.php';

class Admin extends User{

    public function __construct(
        string $password,
        string $email,
        string $userName,
		int $id = null
    ) {
		parent::__construct($password, $email, $userName, $id);
		$this->role = ['ROLE_USER', 'ROLE_ADMIN'];
    }
}