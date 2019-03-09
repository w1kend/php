<?php
/**
 * Created by PhpStorm.
 * User: Макаров
 * Date: 08.03.2019
 * Time: 16:54
 */

class Rectangle
{
    private $width,$height;

    function __construct($w,$h)
    {
        $this->width = $w;
        $this->height = $h;
    }

    function area()
    {
        return ($this->width > 0 && $this->height > 0) ? $this->width * $this->height : 0;
    }

    function getProps()
    {
        return ["width" =>  $this->width, "height" => $this->height];
    }

}
