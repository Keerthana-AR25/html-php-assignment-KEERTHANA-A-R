<?php
// Numeric array
$numbers = [10, 20, 30, 40, 50];

echo "Original Array: ";
print_r($numbers);

echo "<br><br>";

// Using array_pop()
$popped = array_pop($numbers);
echo "Element removed using array_pop(): $popped <br>";
echo "Array after array_pop(): ";
print_r($numbers);

echo "<br><br>";

// Reset array for shift example
$numbers = [10, 20, 30, 40, 50];

// Using array_shift()
$shifted = array_shift($numbers);
echo "Element removed using array_shift(): $shifted <br>";
echo "Array after array_shift(): ";
print_r($numbers);
?>


Array after array_shift(): Array ( [0] => 20 [1] => 30 [2] => 40 [3] => 50 )
