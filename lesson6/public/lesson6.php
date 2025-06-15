<?php

use lesson6\App\Car;

require __DIR__ . '/../../vendor/autoload.php';

$car = new Car('porche', 911,2020);
print_r('model: ' . $car->model);
//print_r($car->brand); doesnt work since not public
//print_r($car->year);  doesnt work since not public

print_r("\nyear: " . $car->getYear());
print_r("\nbrand: " . $car->getBrand());