<?php
require_once 'IVideo.php';

class Video implements IVideo
{
    private string $title;
    private float $rate;
    private int $views;
    private int $likes;
    private bool $isPlaying;

    public function __construct($ti)
    {
        $this->title = $ti;
        $this->rate = 1;
        $this->views = 0;
        $this->likes = 0;
        $this->isPlaying = false;
    }

    public function play(): void
    {
        $this->setIsPlaying(true);
    }

    public function pause(): void
    {
        $this->setIsPlaying(false);
    }

    public function like(): void
    {
        $this->setLikes();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($t): void
    {
        $this->title = $t;
    }

    public function getRate(): float
    {
        return $this->rate;
    }

    public function setRate($r): void
    {
        $this->rate = $r;
    }

    public function getViews(): int
    {
        return $this->views;
    }

    public function setViews($v): void
    {
        $this->views = $v;
    }

    public function getLikes(): int
    {
        return $this->likes;
    }

    public function setLikes(): void
    {
        $this->likes++;
    }

    public function getIsPlaying(): bool
    {
        return $this->isPlaying;
    }

    public function setIsPlaying($i): void
    {
        $this->isPlaying = $i;
    }
}
