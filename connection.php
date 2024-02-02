<?php
// Database configuration
$host = 'localhost';  
$dbname = 'government records';  
$username = 'root';  
$password = '';  

// Establish a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo("connection success:");
}

// Check if the form is submitted
