<?php
require_once 'Person.php';

class Viewer extends Person
{
    private bool $login;
    private int $totalWatched;

    public function watchedOneMore(): void
    {
        $this->totalWatched++;
    }

    public function getLogin(): bool
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
