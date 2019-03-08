<?php
class Circle
{
    private $radius;
    const PI = 3.1415;
    function __construct($rad)
    {
        $this->radius = $rad;
    }

    function area()
    {
        return ($this->radius > 0) ? self::PI * pow($this->radius,2) : 0;
    }
    function getProps()
    {
        return ["radius" => $this->radius];
    }
}