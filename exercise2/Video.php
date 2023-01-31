<?php
require_once 'IVideo.php';

class Video implements IVideo
{
    private string $title;
    private float $rate;
    private int $views;
    private int $likes;
    private bool $isPlaying;

    public function play()
    {
        $this->setIsPlaying(true);
    }

    public function pause()
    {
        $this->setIsPlaying(false);
    }

    public function like()
    {
        $this->setLikes();
    }

    public function getTitle()
    {
        $this->title;
    }

    public function setTitle($t)
    {
        $this->title = $t;
    }

    public function getRate()
    {
        $this->rate;
    }

    public function setRate($r)
    {
        $this->rate = $r;
    }

    public function getViews()
    {
        $this->views;
    }

    public function setViews($v)
    {
        $this->views = $v;
    }

    public function getLikes()
    {
        $this->likes;
    }

    public function setLikes()
    {
        $this->likes++;
    }

    public function getIsPlaying()
    {
        $this->isPlaying;
    }

    public function setIsPlaying($i)
    {
        $this->isPlaying = $i;
    }
}
