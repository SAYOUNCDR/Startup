<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $organization = $_POST['organization'];
    $position = $_POST['position'];
    $investor_type = $_POST['investor_type'];
    $linkedin = $_POST['linkedin'];
    $investment_stage = $_POST['investment_stage'];
    $investment_range = $_POST['investment_range'];
    $sectors = $_POST['sectors'];
    $thesis = $_POST['thesis'];
    $accreditation = isset($_POST['accreditation']) ? 1 : 0;

    $sql = "INSERT INTO investors (full_name, email, password, organization, position, investor_type, linkedin, investment_stage, investment_range, sectors, thesis, accreditation)
            VALUES ('$full_name', '$email', '$password', '$organization', '$position', '$investor_type', '$linkedin', '$investment_stage', '$investment_range', '$sectors', '$thesis', '$accreditation')";

    if (mysqli_query($conn, $sql)) {
        echo "Investor registered successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
