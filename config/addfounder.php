<?php
require_once 'tables.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input values
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure password hashing

    $startupName = $_POST['startupName'];
    $category = $_POST['category'];
    $foundingDate = $_POST['foundingDate'];
    $companySize = $_POST['companySize'];
    $description = $_POST['description'];

    $fundingStage = $_POST['fundingStage'];

    // Handle funding_raised: ensure it's a valid decimal number
    $raisedAmount = $_POST['raisedAmount'];

    // Handle currently_seeking
    $seeking = $_POST['seeking'];

    // Insert into the database
    $sql = "INSERT INTO founders (
                full_name, email, password, 
                startup_name, category, founding_date, company_size, description, 
                funding_stage, funding_raised, currently_seeking
            ) VALUES (
                '$fullName', '$email', '$password', 
                '$startupName', '$category', '$foundingDate', '$companySize', '$description', 
                '$fundingStage', '$raisedAmount', '$seeking'
            )";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration successful!'); window.location.href = '../SignUps/login/index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
