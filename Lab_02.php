<?php
/**
 * Lab 02 - PHP OOP Basics
 * Student: Sayed Ahmad Wali
 * Father's Name: Sayed Gharib
 */

// Task 1: Class Constant
// ============================================
class Library {
    // MAX_BOOKS is a constant because it represents a fixed borrowing limit
    // that applies to all libraries and should never change during runtime.
    const MAX_BOOKS = 3;
}

echo "Maximum books allowed: " . Library::MAX_BOOKS . "\n";

// ============================================
// Task 2: Static Property and Static Method
// ============================================
class StudentCounter {
    public static $count = 0;

    public static function addStudent() {
        self::$count++;
    }
}

// Call addStudent three times without creating an object
StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

echo "Total students: " . StudentCounter::$count . "\n";

// ============================================
// Task 3: Abstract Class and Abstract Method
// ============================================
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

// Create objects and call start()
$car = new Car();
$bike = new Bike();
$car->start();
$bike->start();
?>
