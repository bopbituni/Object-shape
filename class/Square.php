<?php
include_once "Rectangular.php";

class Square extends Rectangular
{
    public $edge;

    public function __construct($name, $edge)
    {
        parent::__construct($name, $edge, $edge);
    }

}