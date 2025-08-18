<?php
// Function to reverse a string using stack
function reverseString($input) {
    $stack = [];
    $reversed = "";

    // Push each character onto the stack
    for ($i = 0; $i < strlen($input); $i++) {
        array_push($stack, $input[$i]);
    }

    // Pop characters from stack to form reversed string
    while (!empty($stack)) {
        $reversed .= array_pop($stack);
    }

    return $reversed;
}

// Example usage
$original = "Hello World";
echo "Original String: $original<br>";
echo "Reversed String: " . reverseString($original);
?>


Output:
arduino
Copy
Edit
Original String: Hello World
Reversed String: dlroW olleH
