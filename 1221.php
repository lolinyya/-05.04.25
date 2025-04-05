<?php

// Интерфейс Shape
interface Shape {
    public function GetArea();
    public function GetPerimeter();
    public function GetDescription();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function GetArea() {
        return pi() * pow($this->radius, 2);
    }

    public function GetPerimeter() {
        return 2 * pi() * $this->radius;
    }

    public function GetDescription() {
        return "Это круг с радиусом " . $this->radius;
    }
}

class Rectangle implements Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function GetArea() {
        return $this->length * $this->width;
    }

    public function GetPerimeter() {
        return 2 * ($this->length + $this->width);
    }

    public function GetDescription() {
        return "Это прямоугольник с длиной " . $this->length . " и шириной " . $this->width;
    }
}

// Создание объектов и вывод информации
$circle = new Circle(5);
echo $circle->GetDescription() . PHP_EOL;
echo "Площадь: " . $circle->GetArea() . PHP_EOL;
echo "Периметр: " . $circle->GetPerimeter() . PHP_EOL;

echo PHP_EOL; // Разделитель

$rectangle = new Rectangle(4, 6);
echo $rectangle->GetDescription() . PHP_EOL;
echo "Площадь: " . $rectangle->GetArea() . PHP_EOL;
echo "Периметр: " . $rectangle->GetPerimeter() . PHP_EOL;

