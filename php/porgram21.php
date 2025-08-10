<?php
// Function to check leap year
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true; // Leap year
    } else {
        return false; // Not a leap year
    }
}

// Example usage
$year = 2024; // Change this to test

if (isLeapYear($year)) {
    echo "$year is a Leap Year.";
} else {
    echo "$year is NOT a Leap Year.";
}
?>
