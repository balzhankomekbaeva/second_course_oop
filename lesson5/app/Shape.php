<?php

namespace lesson5\App;

class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}