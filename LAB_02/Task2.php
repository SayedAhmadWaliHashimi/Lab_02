<?php
// Task 2: Static Property and Static Method
class StudentCounter {
    public static $count = 0;
    public static function addStudent() {
        self::$count++;
    }
}
StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();
echo "Total students: " . StudentCounter::$count . "\n";
?>
