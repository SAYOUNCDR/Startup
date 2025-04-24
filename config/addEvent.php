<?php
require_once 'tables.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input values
    $eventName = $_POST['eventName'];
    $eventType = $_POST['eventType'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $locationType = $_POST['locationType'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $email = $_POST['email'];

    // Insert into the database
    $sql = "INSERT INTO events (
                eventName, eventType, startDate, endDate, locationType, location, description, price, email
            ) VALUES (
                '$eventName', '$eventType', '$startDate', '$endDate', '$locationType', '$location', '$description', '$price', '$email'
            )";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Event added successfully!'); window.location.href = '../Eventpage/events.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
