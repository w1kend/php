<?php
/**
 * Created by PhpStorm.
 * User: Макаров
 * Date: 08.03.2019
 * Time: 16:54
 */

class Pyramid
{
    private $side;

    function __construct($s)
    {
        $this->side = $s;
    }

    function area()
    {
        return $this->side > 0? sqrt(3) * pow($this->side,2) : 0;
    }

    function getProps()
    {
        return ["side" =>  $this->side];
    }
}