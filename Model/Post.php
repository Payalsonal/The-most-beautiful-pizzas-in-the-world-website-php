<?php

class Post {
	private $id;
	private $category;
	private $source;
	private $title;
	private $description;
	private $likes;
	private $dislikes;

    public function __construct(
        string $category,
        string $source,
        string $title,
        string $description,
        int $likes,
        int $dislikes,
		int $id = null
    ) {
        $this->category = $category;
        $this->source = $source;
        $this->title = $title;
        $this->description = $description;
        $this->likes = $likes;
        $this->dislikes = $dislikes;
		$this->id = $id;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
	public function getSource(): string
    {
        return $this->source;
    }
	public function getTitle(): string
    {
        return $this->title;
    }
	public function getDescription(): string
    {
        return $this->description;
    }
	public function getLikes(): int
    {
        return $this->likes;
    }
	public function getDislikes(): int
    {
        return $this->dislikes;
    }
	public function getId(): int
    {
        return $this->id;
    }

}