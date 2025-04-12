<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['fullName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $startup_name = $_POST['startup_name'];
    $category = $_POST['category'];
    $founding_date = $_POST['founding_date'];
    $company_size = $_POST['company_size'];
    $description = $_POST['description'];
    $funding_stage = $_POST['funding_stage'];
    $funding_raised = $_POST['funding_raised'];
    $currently_seeking = $_POST['currently_seeking'];

    $sql = "INSERT INTO founders (full_name, email, password, startup_name, category, founding_date, company_size, description, funding_stage, funding_raised, currently_seeking)
            VALUES ('$full_name', '$email', '$password', '$startup_name', '$category', '$founding_date', '$company_size', '$description', '$funding_stage', '$funding_raised', '$currently_seeking')";

    if (mysqli_query($conn, $sql)) {
        echo "Founder registered successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>