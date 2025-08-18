<?php
// Function to calculate average
function calculateAverage($numbers) {
    if (empty($numbers)) {
        return 0; // handle empty array
    }
    $sum = array_sum($numbers);   // built-in function to get sum
    $count = count($numbers);     // number of elements
    return $sum / $count;         // average
}

// Example usage
$data = [10, 20, 30, 40, 50];
echo "Numbers: " . implode(", ", $data) . "<br>";
echo "Average: " . calculateAverage($data);
?>


Output:

Numbers: 10, 20, 30, 40, 50
Average: 30
