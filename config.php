<?php
$host = "8.130.66.162";
$user = "root";
$password = "root";
$database = "news";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>