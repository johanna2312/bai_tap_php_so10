<?php
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        echo "Car started.\n";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        echo "Motorcycle started.\n";
    }
}

$car = new Car();
$car->start();

$motorcycle = new Motorcycle();
$motorcycle->start();
?>