<?php
// Function to find highest and lowest numbers in an array
function findHighLow($numbers) {
    $highest = max($numbers); // built-in function to get max
    $lowest = min($numbers);  // built-in function to get min
    return ["highest" => $highest, "lowest" => $lowest];
}

// Example array
$values = [12, 45, 2, 67, 89, 34, 5, 90];

// Call the function
$result = findHighLow($values);

// Display results
echo "<h2>Array Values: " . implode(", ", $values) . "</h2>";
echo "<p><strong>Highest Value:</strong> " . $result['highest'] . "</p>";
echo "<p><strong>Lowest Value:</strong> " . $result['lowest'] . "</p>";
?>




output:
Array Values: 12, 45, 2, 67, 89, 34, 5, 90
Highest Value: 90
Lowest Value: 2
