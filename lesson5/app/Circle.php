<?php

namespace lesson5\App;
class Circle extends Shape
{
    public $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return $this->radius * $this->radius * 3.14;

    }
}