<?php


use lesson8\App\Bicycle;
use lesson8\App\Car;

require __DIR__ . '/../../vendor/autoload.php';

$car = new Car();
echo $car->start();
echo $car->stop();

$bicycle = new Bicycle();
echo $bicycle->start();
echo $bicycle->stop();