<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $title = $_POST['title'];
    $company = $_POST['company'];
    $expertise = $_POST['expertise'];
    $experience = $_POST['experience'];
    $bio = $_POST['bio'];
    $linkedin = $_POST['linkedin'];
    $preferences = $_POST['preferences']; 

    $sql = "INSERT INTO collaborators (first_name, last_name, email, password, title, company, expertise, experience_level, bio, linkedin, preferences)
            VALUES 
            ('$first_name', '$last_name', '$email', '$password', '$title', '$company', '$expertise', '$experience', '$bio', '$linkedin', '$preferences')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration successful!'); window.location.href = '../SignUps/login/index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}else{
    echo "Invalid request.";
}
?>