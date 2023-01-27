<?php
class Book
{
    // atributes
    private string $title;
    private string $author;
    private int $allPages;
    private int $currPage;
    private bool $open;
    private string $reader;

    // methods
    public function details(): void
    {
        $verify = $this->getOpen() ? "true" : "false";
        $phrase = "Title: " . $this->getTitle() .
            ", author: " . $this->getAuthor() .
            ", total pages: " . $this->getAllPages() .
            ", actual page: " . $this->getCurrPage() .
            ", it's open: " . $verify .
            ", reader: " . $this->getReader();
        echo $phrase;
    }

    public function nextPage(): void
    {
        if ($this->getCurrPage() + 1 <= $this->getAllPages()) {
            $this->currPage += 1;
            echo "Page changed </br>";
        } else {
            echo "You finshed this book </br>";
        }
    }

    // special method
    public function __construct(string $ti, string $au, int $al, string $re)
    {
        $this->title = $ti;
        $this->author = $au;
        $this->allPages = $al;
        $this->currPage = 0;
        $this->open = false;
        $this->reader = $re;
    }

    // getters and setters
    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $ti): void
    {
        $this->title = $ti;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $au): void
    {
        $this->author = $au;
    }

    public function getAllPages(): int
    {
        return $this->allPages;
    }

    public function setAllPages(int $al): void
    {
        $this->allPages = $al;
    }

    public function getCurrPage(): int
    {
        return $this->currPage;
    }

    public function setCurrPage(int $cu): void
    {
        $this->currPage = $cu;
    }

    public function getOpen(): bool
    {
        return $this->open;
    }

    public function setOpen(bool $op): void
    {
        $this->open = $op;
    }

    public function getReader(): string
    {
        return $this->reader;
    }

    public function setReader(string $re): void
    {
        $this->reader = $re;
    }
}
