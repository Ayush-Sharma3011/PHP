<?php
$flights = [];
$bookings = [];


function addFlight($flightNo, $source, $destination, $seats, $price) {
    global $flights;
    $flights[$flightNo] = [
        'flightNo' => $flightNo,
        'source' => $source,
        'destination' => $destination,
        'totalSeats' => $seats,
        'availableSeats' => $seats,
        'price' => $price
    ];
    echo "Flight $flightNo added successfully!\n";
}


function displayFlights() {
    global $flights;
    if(empty($flights)) {
        echo "No flights available!\n";
        return;
    }
    
    echo "\n=== Available Flights ===\n";
    foreach($flights as $flight) {
        echo "Flight No: " . $flight['flightNo'] . "\n";
        echo "Route: " . $flight['source'] . " to " . $flight['destination'] . "\n";
        echo "Available Seats: " . $flight['availableSeats'] . "\n";
        echo "Price: $" . $flight['price'] . "\n";
        echo "=====================\n";
    }
}

function bookFlight($flightNo, $passengerName) {
    global $flights, $bookings;
    
    if(!isset($flights[$flightNo])) {
        echo "Flight not found!\n";
        return false;
    }
    
    if($flights[$flightNo]['availableSeats'] > 0) {
        $flights[$flightNo]['availableSeats']--;
        $bookingId = uniqid();
        $bookings[$bookingId] = [
            'flightNo' => $flightNo,
            'passengerName' => $passengerName,
            'bookingId' => $bookingId
        ];
        echo "Booking successful! Booking ID: $bookingId\n";
        return true;
    } else {
        echo "Sorry, no seats available on this flight!\n";
        return false;
    }
}

function checkSeats($flightNo) {
    global $flights;
    
    if(isset($flights[$flightNo])) {
        echo "Available seats on flight $flightNo: " . $flights[$flightNo]['availableSeats'] . "\n";
    } else {
        echo "Flight not found!\n";
    }
}

function cancelBooking($bookingId) {
    global $flights, $bookings;
    
    if(isset($bookings[$bookingId])) {
        $flightNo = $bookings[$bookingId]['flightNo'];
        $flights[$flightNo]['availableSeats']++;
        unset($bookings[$bookingId]);
        echo "Booking cancelled successfully!\n";
        return true;
    } else {
        echo "Booking not found!\n";
        return false;
    }
}

addFlight("FL101", "New York", "London", 200, 500);
addFlight("FL102", "Paris", "Tokyo", 300, 800);
addFlight("FL103", "Dubai", "Singapore", 150, 400);

displayFlights();

$booking1 = bookFlight("FL101", "John Doe");
$booking2 = bookFlight("FL102", "Jane Smith");

checkSeats("FL101");

displayFlights();

cancelBooking("some_booking_id");

displayFlights();

?>