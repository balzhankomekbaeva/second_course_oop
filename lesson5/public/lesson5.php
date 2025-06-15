<?php

use lesson5\App\Circle;
use lesson5\App\Rectangle;

require __DIR__ . '/../../vendor/autoload.php';

$circle = new Circle('circle', 4);
$rectangle = new Rectangle("rectangle", 4, 6);

echo "Shape: " . $circle->getName() . "\n";
echo "Area: " . $circle->calculateArea() . "\n\n";

echo "Shape: " . $rectangle->getName() . "\n";
echo "Area: " . $rectangle->calculateArea() . "\n";
