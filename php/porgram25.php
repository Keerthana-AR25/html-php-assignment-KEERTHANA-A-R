<?php
$str = "The Thing will come to you soon";

// Replace first occurrence of 'the' (case-insensitive)
$result = preg_replace('/the/i', 'best', $str, 1);

echo "Original String: $str<br>";
echo "Modified String: $result";
?>


output
Original String: The Thing will come to you soon
Modified String: best Thing will come to you soon