<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "ElevateX";

$conn = mysqli_connect($server_name, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $database_name";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

mysqli_close($conn);


// Connect to the database
$conn = mysqli_connect($server_name, $username, $password, $database_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
