<?php
interface IPublication
{
    public function open();
    public function close();
    public function leafThrough();
    public function nextPage();
    public function backPage();
}
