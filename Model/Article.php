<?php

declare(strict_types=1);

class Article
{
    public int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;
    public ?string $author;
    public ?string $image;

    public function __construct(int $idP, string $titleP, ?string $descriptionP, ?string $publishDateP, string $authorP, string $imageP)
    {
        $this->id = $idP;
        $this->title = $titleP;
        $this->description = $descriptionP;
        $this->publishDate = $publishDateP;
        $this->author = $authorP;
        $this->image = $imageP;
    }

    public function formatPublishDate($format = 'DD-MM-YYYY')
    {
        // TODO: return the date in the required format
        $date = date_create($this->publishDate);
    }
}