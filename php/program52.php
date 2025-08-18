
<?php
// -------- STACK EXAMPLE --------
echo "<h3>Stack Operations (LIFO)</h3>";
$stack = [];

// Push elements onto stack
array_push($stack, "A");
array_push($stack, "B");
array_push($stack, "C");

echo "Stack after pushes: ";
print_r($stack);

// Pop element from stack
$popped = array_pop($stack);
echo "<br>Element popped: $popped <br>";
echo "Stack after pop: ";
print_r($stack);

echo "<br><br>";

// -------- QUEUE EXAMPLE --------
echo "<h3>Queue Operations (FIFO)</h3>";
$queue = [];

// Enqueue elements
array_push($queue, "A");
array_push($queue, "B");
array_push($queue, "C");

echo "Queue after enqueues: ";
print_r($queue);

// Dequeue element
$dequeued = array_shift($queue);
echo "<br>Element dequeued: $dequeued <br>";
echo "Queue after dequeue: ";
print_r($queue);
?>

 Output
Stack Operations (LIFO)
Stack after pushes: Array ( [0] => A [1] => B [2] => C )
Element popped: C
Stack after pop: Array ( [0] => A [1] => B )

Queue Operations (FIFO)
Queue after enqueues: Array ( [0] => A [1] => B [2] => C )
Element dequeued: A
Queue after dequeue: Array ( [0] => B [1] => C )
