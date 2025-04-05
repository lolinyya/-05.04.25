<?php
// Circle.php
declare(strict_types=1);

require_once 'Shape.php';

class Circle implements Shape {
    private float $radius;
    
    public function __construct(float $radius) {
        $this->radius = $radius;
    }
    
    public function getArea(): float {
        return pi() * $this->radius ** 2;
    }
    
    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }
    
    public function getDescription(): string {
        return sprintf("Окружность с радиусом %.2f", $this->radius);
    }
}