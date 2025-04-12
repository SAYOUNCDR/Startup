<?php
session_start();
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $full_name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $organization = mysqli_real_escape_string($conn, $_POST['organization']);
    $title = mysqli_real_escape_string($conn, $_POST['position']); // Changed position to title
    $investor_type = mysqli_real_escape_string($conn, $_POST['investorType']);
    $linkedin = mysqli_real_escape_string($conn, $_POST['linkedIn']);
    $investment_stage = mysqli_real_escape_string($conn, $_POST['investmentStage']);
    $investment_range = mysqli_real_escape_string($conn, $_POST['investmentRange']);
    $sectors = mysqli_real_escape_string($conn, $_POST['sectors']);
    $thesis = mysqli_real_escape_string($conn, $_POST['investmentThesis']);
    $accreditation = isset($_POST['accredited']) ? 1 : 0;

    // Check if email already exists
    $check_email = "SELECT * FROM investors WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email);
    
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error'] = "Email already exists!";
        header("Location: ../SignUps/investor/index.php");
        exit();
    }

    // Insert into database
    $sql = "INSERT INTO investors (
        full_name, 
        email, 
        password, 
        organization, 
        title,           /* Changed from position to title */
        investor_type, 
        linkedin, 
        investment_stage, 
        investment_range, 
        sectors, 
        thesis, 
        is_accredited
    ) VALUES (
        '$full_name',
        '$email',
        '$password',
        '$organization',
        '$title',        /* Changed from position to title */
        '$investor_type',
        '$linkedin',
        '$investment_stage',
        '$investment_range',
        '$sectors',
        '$thesis',
        '$accreditation'
    )";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Registration successful! Please login.";
        header("Location: ../SignUps/login/index.php");
        exit();
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
        header("Location: ../SignUps/investor/index.php");
        exit();
    }

    mysqli_close($conn);
} else {
    $_SESSION['error'] = "Invalid request method!";
    header("Location: ../SignUps/investor/index.php");
    exit();
}
?>