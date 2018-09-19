<?php
class BaseElement
{
    private $title;
    public $descriotion;
    public $visible;
    public $month;

    public function __construct($title, $descriotion, $visible,$month) {
        $this->title = $title;
        $this->descriotion = $descriotion;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}