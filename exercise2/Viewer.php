<?php
require_once 'Person.php';

class Viewer extends Person
{
    private string $login;
    private int $totalWatched;

    public function __construct($n, $a, $s, $l)
    {
        parent::__construct($n, $a, $s);
        $this->totalWatched = 0;
        $this->login = $l;
    }

    public function watchedOneMore(): void
    {
        $this->totalWatched++;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin($l): void
    {
        $this->login = $l;
    }

    public function getTotalWatched(): int
    {
        return $this->totalWatched;
    }

    public function setTotalWatched($t): void
    {
        $this->totalWatched = $t;
    }
}
