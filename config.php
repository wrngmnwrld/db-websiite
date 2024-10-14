<?php
$servername = "localhost";
$username = "db1162654-world";
$password = "Wrongworld2";
$dbname = "db1162654-world";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
