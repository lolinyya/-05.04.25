<?php
// Rectangle.php
declare(strict_types=1);

require_once 'Shape.php';

class Rectangle implements Shape {
    private float $length;
    private float $width;
    
    public function __construct(float $length, float $width) {
        $this->length = $length;
        $this->width = $width;
    }
    
    public function getArea(): float {
        return $this->length * $this->width;
    }
    
    public function getPerimeter(): float {
        return 2 * ($this->length + $this->width);
    }
    
    public function getDescription(): string {
        return sprintf("Прямоугольник %.2f × %.2f", $this->length, $this->width);
    }
}