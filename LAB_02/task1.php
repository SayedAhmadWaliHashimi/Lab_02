<?php
/**
 * Lab 02 - PHP OOP Basics
 * Student: Sayed Ahmad Wali
 * Father's Name: Sayed Gharib
 */

// Task 1: Class Constant
class Library {
    // MAX_BOOKS is a constant because it represents a fixed borrowing limit
    // that applies to all libraries and should never change during runtime.
    const MAX_BOOKS = 3;
}
echo "Maximum books allowed: " . Library::MAX_BOOKS . "\n";
?>
