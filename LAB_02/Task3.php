<?php
// Task 3: Abstract Class and Abstract Method
abstract class Vehicle {
    abstract public function start();
}
class Car extends Vehicle {
    public function start() {
        echo "Car engine started.\n";
    }
}
class Bike extends Vehicle {
    public function start() {
        echo "Bike started.\n";
    }
}
$car = new Car();
$bike = new Bike();
$car->start();
$bike->start();
?>
