<?php

class User {
	protected $id;
    protected $password;
    protected $userName;
	protected $email;
    protected $role = ['ROLE_USER'];

    public function __construct(
        string $password,
        string $email,
        string $userName,
		int $id = null
    ) {
        $this->password = $password;
        $this->userName = $userName;
        $this->id = $id;
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
	
	public function getUserName(): string
    {
        return $this->userName;
    }
	public function getId(): int
    {
        return $this->id;
    }
	public function getEmail(): string
    {
        return $this->email;
    }
	public function getRole(): array
    {
        return $this->role;
    }
}