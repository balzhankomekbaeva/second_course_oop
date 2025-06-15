<?php

namespace lesson6\App;

class Car
{
    private $brand;
    public $model;
    protected $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }


    public function getBrand()
    {
        return $this->brand;
    }


    public function getYear()
    {
        return $this->year;
    }
}