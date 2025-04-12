<?php
require_once 'db.php'; // Include the database connection file


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Founders Table [checked all correct]
$founders_sql = "CREATE TABLE IF NOT EXISTS founders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    startup_name VARCHAR(100),
    category VARCHAR(100),
    founding_date DATE,
    company_size VARCHAR(50),
    description TEXT,
    funding_stage VARCHAR(50),
    funding_raised DECIMAL(15, 2),
    currently_seeking TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Collaborators Table
$collaborators_sql = "CREATE TABLE IF NOT EXISTS collaborators (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    title VARCHAR(100),
    company VARCHAR(100),
    expertise TEXT,
    experience_level VARCHAR(50),
    bio TEXT,
    linkedin VARCHAR(255),
    preferences TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Investors Table
$investors_sql = "CREATE TABLE IF NOT EXISTS investors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    organization VARCHAR(100),
    title VARCHAR(100),
    investor_type VARCHAR(100),
    linkedin VARCHAR(255),
    investment_stage VARCHAR(50),
    investment_range VARCHAR(100),
    sectors TEXT,
    thesis TEXT,
    is_accredited BOOLEAN,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute all queries --> for testing purposes
if (mysqli_query($conn, $founders_sql)) {
    echo "Founders table created successfully.<br>";
} else {
    echo "Error creating founders table: " . mysqli_error($conn) . "<br>";
}

if (mysqli_query($conn, $collaborators_sql)) {
    echo "Collaborators table created successfully.<br>";
} else {
    echo "Error creating collaborators table: " . mysqli_error($conn) . "<br>";
}

if (mysqli_query($conn, $investors_sql)) {
    echo "Investors table created successfully.<br>";
} else {
    echo "Error creating investors table: " . mysqli_error($conn) . "<br>";
}

