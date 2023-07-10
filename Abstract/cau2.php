<?php
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof! Woof!\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow! Meow!\n";
    }
}

$dog = new Dog();
$dog->makeSound();

$cat = new Cat();
$cat->makeSound();
?>