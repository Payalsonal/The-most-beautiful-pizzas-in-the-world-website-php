<?php

class User {
    private $password;
    private $userName;
    private $role = ['ROLE_USER'];

    public function __construct(
        string $password,
        string $userName
    ) {
        $this->password = $password;
        $this->userName = $userName;
    }

    public function getPassword()
    {
        return $this->password;
    }
	
	public function getUserName()
    {
        return $this->userName;
    }
}