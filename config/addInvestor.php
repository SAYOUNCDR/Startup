<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $organization = $_POST['organization'];
    $title = $_POST['title'];
    $investor_type = $_POST['investor_type'];
    $linkedin = $_POST['linkedin'];
    $investment_stage = $_POST['investment_stage'];
    $investment_range = $_POST['investment_range'];
    $sectors = $_POST['sectors'];
    $thesis = $_POST['thesis'];
    $accreditation = isset($_POST['is_accredited']) ? 1 : 0;

    $sql = "INSERT INTO investors (full_name, email, password, organization, title, investor_type, linkedin, investment_stage, investment_range, sectors, thesis, is_accredited)
            VALUES ('$full_name', '$email', '$password', '$organization', '$title', '$investor_type', '$linkedin', '$investment_stage', '$investment_range', '$sectors', '$thesis', '$accreditation')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Registration successful!"); window.location.href = "../SignUps/login/index.php";</script>';
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}else {
    echo "Invalid request.";
}
