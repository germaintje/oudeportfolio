<?php
// require_once "DataHandler.php";
$servername = "db.germaindejong.nl";
$username = "md477759db465645";
$password = "portfolio2019";
$dbname = "md477759db465645";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}