<?php
// Include configuration file
require_once 'config.php';

// Start session
session_start();

// Set header to return JSON
header('Content-Type: application/json');

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
    exit;
}

// Get POST data
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = $_POST['password'] ?? '';
$firstName = $_POST['first_name'] ?? '';
$lastName = $_POST['last_name'] ?? '';
$userType = $_POST['user_type'] ?? '';

// Validate input
if (!$email || !$password || !$firstName || !$lastName || !$userType) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Please provide all required fields'
    ]);
    exit;
}

try {
    // Get database connection
    $pdo = getDbConnection();
    
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    // Prepare statement to insert user
    $stmt = $pdo->prepare('INSERT INTO users (email, password, first_name, last_name, user_type) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$email, $hashedPassword, $firstName, $lastName, $userType]);
    
    // Return success response
    echo json_encode([
        'status' => 'success',
        'message' => 'Registration successful'
    ]);
    
} catch (PDOException $e) {
    // Log error
    error_log("Registration error: " . $e->getMessage());
    
    // Return error response
    echo json_encode([
        'status' => 'error',
        'message' => 'An error occurred during registration. Please try again.'
    ]);
} 