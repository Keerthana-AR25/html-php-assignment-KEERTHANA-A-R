<?php
// Initialize an empty queue
$ticketQueue = [];

// Function to add a person to the queue
function bookTicket(&$queue, $name) {
    array_push($queue, $name); // enqueue
    echo "$name has been added to the booking queue.<br>";
}

// Function to process the next booking
function processBooking(&$queue) {
    if (empty($queue)) {
        echo "No bookings in the queue.<br>";
    } else {
        $person = array_shift($queue); // dequeue
        echo "Booking processed for: $person<br>";
    }
}

// Function to display the queue
function displayQueue($queue) {
    if (empty($queue)) {
        echo "The booking queue is empty.<br>";
    } else {
        echo "Current booking queue: " . implode(", ", $queue) . "<br>";
    }
}

// --- Simulation ---

bookTicket($ticketQueue, "Alice");
bookTicket($ticketQueue, "Bob");
bookTicket($ticketQueue, "Charlie");

displayQueue($ticketQueue);

processBooking($ticketQueue);
displayQueue($ticketQueue);

processBooking($ticketQueue);
processBooking($ticketQueue);
processBooking($ticketQueue);
?>



Output (simulation):

Alice has been added to the booking queue.
Bob has been added to the booking queue.
Charlie has been added to the booking queue.
Current booking queue: Alice, Bob, Charlie
Booking processed for: Alice
Current booking queue: Bob, Charlie
Booking processed for: Bob
Booking processed for: Charlie
No bookings in the queue.
