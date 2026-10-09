<?php

$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    die("MySQL connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS papa_gs_grills";

if ($conn->query($sql)) {
    echo "Database created successfully!<br>";
} else {
    die("Error creating database: " . $conn->error);
}

$conn->select_db("papa_gs_grills");

$sql = "CREATE TABLE IF NOT EXISTS enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(30),
    subject VARCHAR(200),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql)) {
    echo "Enquiries table created successfully!<br>";
} else {
    die("Error creating table: " . $conn->error);
}

$conn->close();

echo "<br><strong>Papa G's database is ready!</strong>";

?>