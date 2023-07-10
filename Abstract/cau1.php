<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
$circleArea = $circle->calculateArea();
echo "Circle area: " . $circleArea . "\n";

$rectangle = new Rectangle(4, 6);
$rectangleArea = $rectangle->calculateArea();
echo "Rectangle area: " . $rectangleArea . "\n";
?>
