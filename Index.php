<?php
// index.php
declare(strict_types=1);

require_once 'Circle.php';
require_once 'Rectangle.php';

function showShapeInfo(Shape $shape): void {
    echo $shape->getDescription() . PHP_EOL;
    echo "Площадь: " . number_format($shape->getArea(), 2) . PHP_EOL;
    echo "Периметр: " . number_format($shape->getPerimeter(), 2) . PHP_EOL . PHP_EOL;
}

$circle = new Circle(5.0);
$rectangle = new Rectangle(4.0, 6.0);

showShapeInfo($circle);
showShapeInfo($rectangle);