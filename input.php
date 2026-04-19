<?php

// ============================
// DATABASE CONFIGURATION
// ============================
$server = "localhost";
$username = "root";
$password = "";
$database = "project";

// ============================
// CREATE DATABASE CONNECTION
// ============================
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ============================
// PROCESS FORM DATA
// ============================

// Convert hobbies array to comma-separated string
$hobbies = isset($_POST["hobbies"]) ? implode(", ", $_POST["hobbies"]) : "";

// ============================
// BUILD INSERT QUERY
// ============================
$sql = "INSERT INTO users_report (name, email, password, address, country, gender, hobbies, website, other_info) 
        VALUES (
            '" . $conn->real_escape_string($_POST["name"]) . "',
            '" . $conn->real_escape_string($_POST["email"]) . "',
            '" . $conn->real_escape_string($_POST["password"]) . "',
            '" . $conn->real_escape_string($_POST["address"]) . "',
            '" . $conn->real_escape_string($_POST["country"]) . "',
            '" . $conn->real_escape_string($_POST["gender"]) . "',
            '" . $conn->real_escape_string($hobbies) . "',
            '" . $conn->real_escape_string($_POST["website"]) . "',
            '" . $conn->real_escape_string($_POST["other_info"]) . "'
        )";

// ============================
// EXECUTE QUERY
// ============================
if ($conn->query($sql) === TRUE) {
    echo "✓ Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>
