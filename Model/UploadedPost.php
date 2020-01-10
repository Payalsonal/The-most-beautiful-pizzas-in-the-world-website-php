<?php

class UploadedPost {
	private $id;
	private $source;
	private $title;
	private $description;

    public function __construct(
        string $source,
        string $title,
        string $description,
		int $id = null
    ) {
        $this->source = $source;
        $this->title = $title;
        $this->description = $description;
		$this->id = $id;
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
	public function getId(): int
    {
        return $this->id;
    }

}