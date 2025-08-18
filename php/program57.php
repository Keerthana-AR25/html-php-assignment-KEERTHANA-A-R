<?php
// 1. Check if string starts with "Hello"
if (preg_match("/^Hello/", "Hello World")) {
    echo "Starts with Hello<br>";
}

// 2. Validate email
$email = "test@example.com";
if (preg_match("/^[\w.-]+@[\w.-]+\.[a-z]{2,}$/i", $email)) {
    echo "Valid Email<br>";
}

// 3. Find all digits
$str = "My number is 9876543210";
preg_match_all("/\d+/", $str, $matches);
echo "Digits found: " . implode(", ", $matches[0]) . "<br>";

// 4. Replace multiple spaces with single space
$text = "Hello    World   PHP";
$cleaned = preg_replace("/\s+/", " ", $text);
echo "After cleanup: $cleaned<br>";

// 5. Split string by commas
$list = "apple,banana,grape,orange";
$fruits = preg_split("/,/", $list);
print_r($fruits);
?>


Output:

Starts with Hello
Valid Email
Digits found: 9876543210
After cleanup: Hello World PHP
Array ( [0] => apple [1] => banana [2] => grape [3] => orange )
