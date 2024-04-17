<?php

class manga
{
    private string $title;
    private string $author;
    private string $summary;
    private string $gender;
    private int $date_publication;
    private string $image;
    private int $tomes;

    public function __construct(
        string $title, 
        string $author,
        string $summary,
        string $gender,
        int $date_publication,
        string $image,
        int $tomes
    ) {
        $this ->title = $title;
        $this -> author = $author;
        $this ->summary = $summary;
        $this ->gender = $gender;
        $this ->date_publication = $date_publication;
        $this ->image = $image;
        $this ->tomes = $tomes;
    }

    public function getTitle(): string {
        return $this ->title;
    }

    public function getImage(): string {
        return $this ->image;
    }
    public function getAuthor(): string {
        return $this ->author;
    }
    public function getSummary(): string {
        return $this ->summary;
    }
    public function getGender(): string {
    return $this ->gender;
    }
    public function getDatePublication(): int {
        return $this ->date_publication;
    }
    public function getTomes(): int {
        return $this ->tomes; 
    }
}
