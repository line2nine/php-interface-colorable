<?php
include_once "class/Rectangle.php";
include_once "class/Colorable.php";

class Square extends Rectangle implements Colorable
{
    public $width;

    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    function howToColor()
    {
        return "Color all four sides";
    }

    function getArea()
    {
        return $this->width * 4;
    }
}