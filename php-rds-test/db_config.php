<?php
$host = "database-1.c0rgyw80mvd0.us-east-1.rds.amazonaws.com";
$db   = "database-1";
$user = "admin";
$pass = "Civils1998";
$port = 3306; // MySQL default port

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
