<?php
$numbers = [4, 2, 8, 6];
$assoc   = ["d" => 4, "b" => 2, "a" => 8, "c" => 6];

echo "Original Array:\n";
print_r($numbers);

# 1. sort()
$nums = $numbers;
sort($nums);
echo "\nAfter sort() (ascending, reindex):\n";
print_r($nums);

# 2. rsort()
$nums = $numbers;
rsort($nums);
echo "\nAfter rsort() (descending, reindex):\n";
print_r($nums);

# 3. asort()
$arr = $assoc;
asort($arr);
echo "\nAfter asort() (ascending by value, preserve keys):\n";
print_r($arr);

# 4. arsort()
$arr = $assoc;
arsort($arr);
echo "\nAfter arsort() (descending by value, preserve keys):\n";
print_r($arr);

# 5. ksort()
$arr = $assoc;
ksort($arr);
echo "\nAfter ksort() (ascending by key):\n";
print_r($arr);

# 6. krsort()
$arr = $assoc;
krsort($arr);
echo "\nAfter krsort() (descending by key):\n";
print_r($arr);

# 7. shuffle()
$nums = $numbers;
shuffle($nums);
echo "\nAfter shuffle() (random order):\n";
print_r($nums);
?>
 
 
 
 
 Output:

Original Array:
Array ( [0] => 4 [1] => 2 [2] => 8 [3] => 6 )

After sort() (ascending, reindex):
Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 )

After rsort() (descending, reindex):
Array ( [0] => 8 [1] => 6 [2] => 4 [3] => 2 )

After asort() (ascending by value, preserve keys):
Array ( [b] => 2 [d] => 4 [c] => 6 [a] => 8 )

After arsort() (descending by value, preserve keys):
Array ( [a] => 8 [c] => 6 [d] => 4 [b] => 2 )

After ksort() (ascending by key):
Array ( [a] => 8 [b] => 2 [c] => 6 [d] => 4 )

After krsort() (descending by key):
Array ( [d] => 4 [c] => 6 [b] => 2 [a] => 8 )

After shuffle() (random order):
Array ( [0] => 6 [1] => 2 [2] => 8 [3] => 4 )
